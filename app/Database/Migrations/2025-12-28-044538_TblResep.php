<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblResep extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_resep' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_dokter' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'daftar_obat' => [
                'type'       => 'text',
                'constraint' => '255', 
            ],
            'keterangan' => [
                'type'       => 'text',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_resep', true);
        $this->forge->createTable('tbl_resep');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_resep');
    }
}
