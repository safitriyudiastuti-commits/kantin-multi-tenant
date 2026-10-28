<?php

use App\Modules\Admin\AdminServiceProvider;
use App\Modules\Payments\PaymentsServiceProvider;
use App\Providers\AppServiceProvider;
use App\Providers\FortifyServiceProvider;
use App\Modules\Ordering\OrderingServiceProvider;

return [
    AppServiceProvider::class,
    FortifyServiceProvider::class,
    AdminServiceProvider::class,
    PaymentsServiceProvider::class,
    OrderingServiceProvider::class,
];