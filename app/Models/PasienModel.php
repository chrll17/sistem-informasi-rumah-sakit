<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'tbl_pasien'; // untuk memberi tau nama tabel
    protected $useTimestamps = true; // agar created_at & updated_at terisi otomatis
    protected $primaryKey = 'id_pasien'; // untuk memberi tau nama kolom primary key
    protected $allowedFields = ['nama', 'jenkel', 'alamat', 'telepon']; // untuk memberi tau kolom yg boleh di isi
}
