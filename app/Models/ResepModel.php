<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'tbl_resep'; // untuk memberi tau nama tabel
    protected $useTimestamps = true; // agar created_at & updated_at terisi otomatis
    protected $primaryKey = 'id_resep'; // untuk memberi tau nama kolom primary key
    protected $allowedFields = ['nama_dokter', 'tanggal', 'daftar_obat','keterangan']; // untuk memberi tau kolom yg boleh di isi
}
