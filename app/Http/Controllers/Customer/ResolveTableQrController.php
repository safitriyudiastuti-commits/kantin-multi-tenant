<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResolveTableQrController extends Controller
{
    public function __invoke(Request $request, string $token): Response
    {
        // TODO: diisi pas materi resolve QR meja
        return response()->noContent();
    }
}
