<?php

namespace App\Controllers;

use App\Models\PasienModel;

class Pasien extends BaseController
{
    protected $vpasienmodel; //Mendefinisikan variabel yang menyimpan instance dari PasienModel
    public function __construct()
    {
        $this->vpasienmodel = new PasienModel(); //Fungsi ini otomatis dijalankan saat instance controller Pasien dibuat. Di sini, objek PasienModel dibuat dan disimpan ke dalam variabel $vpasienmodel, sehingga bisa digunakan di semua method dalam controller ini
    }
    public function index(): string
    {
        $data = [
            'tittle' => 'Daftar Pasien',
            'pasien' => $this->vpasienmodel->findAll() //mengambil data pasien dari PasienModel menggunakan findAll()
        ];
        return view('/pasien/index', $data); //mengarahkan ke folder pasien file index
    }
}
