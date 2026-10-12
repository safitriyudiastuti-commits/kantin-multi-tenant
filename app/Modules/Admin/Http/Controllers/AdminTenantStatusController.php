<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class AdminTenantStatusController extends Controller
{
    use AuthorizesRequests;

    public function __invoke(Request $request, Tenant $tenant): RedirectResponse
    {
        $this->authorize('update', $tenant);

        $data = $request->validate([
            'status' => ['required', 'in:active,suspended'],
        ]);

        $tenant->update(['status' => $data['status']]);

        return redirect()->route('admin.tenants.edit', $tenant)
            ->with('status', 'Status tenant diperbarui.');
    }
}