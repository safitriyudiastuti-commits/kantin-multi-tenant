<?php

namespace App\Events;

use App\Models\TenantOrder;
use App\Support\Realtime\TenantChannels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Events\ShouldDispatchAfterCommit;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

final class NewTenantOrderReceived implements ShouldBroadcast, ShouldDispatchAfterCommit
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public TenantOrder $tenantOrder) {}

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel(TenantChannels::orders((int) $this->tenantOrder->tenant_id)),
        ];
    }

    public function broadcastAs(): string
    {
        return 'new-order';
    }

    public function broadcastWith(): array
    {
        return ['tenantOrderId' => (string) $this->tenantOrder->id];
    }
}
