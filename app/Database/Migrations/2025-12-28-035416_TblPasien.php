<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPasien extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pasien' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenkel' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type'       => 'text',
                'constraint' => '255', 
            ],
            'telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
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
        $this->forge->addKey('id_pasien', true);
        $this->forge->createTable('tbl_pasien');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pasien');
    }
}
