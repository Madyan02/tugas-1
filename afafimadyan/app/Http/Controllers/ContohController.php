<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function TampilContoh()
    {
        $data = [
            'totalProducts' => 300,
            'salesToday' => 100,
            'totalRevenue' => 'Rp 75,000,000',
            'registeredUsers' => 300
        ];
        return view('contoh', $data);
    }
}
