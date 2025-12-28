<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblDokter extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dokter' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'spesialis' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jadwal_praktek' => [
                'type'       => 'VARCHAR',
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
        $this->forge->addKey('id_dokter', true);
        $this->forge->createTable('tbl_dokter');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_dokter');
    }
}
