<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'tbl_dokter'; // untuk memberi tau nama tabel
    protected $useTimestamps = true; // agar created_at & updated_at terisi otomatis
    protected $primaryKey = 'id_dokter'; // untuk memberi tau nama kolom primary key
    protected $allowedFields = ['nama', 'spesialis', 'jadwal_praktek']; // untuk memberi tau kolom yg boleh di isi
}
