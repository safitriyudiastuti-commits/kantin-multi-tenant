<?php

use App\Modules\Admin\AdminServiceProvider;
use App\Modules\Payments\PaymentsServiceProvider;
use App\Providers\AppServiceProvider;
use App\Providers\FortifyServiceProvider;

return [
    AppServiceProvider::class,
    FortifyServiceProvider::class,
    AdminServiceProvider::class,
    PaymentsServiceProvider::class,
];