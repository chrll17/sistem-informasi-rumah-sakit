<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
    public function index(): string
    {
        $data = [
            'tittle' => 'Daftar Pasien'
        ];
        return view('/pasien/index', $data); //mengarahkan ke folder pasien file index
    }
}
