<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{

    public function run()
    {
        $data = [
            'title' => 'Makan',
            'description'    => 'disuruh ayang makan',
            'finished_at'    => "2022-04-04-03:20",
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'title' => 'Minum obat',
            'description'    => 'Minum obat rabiesnya',
            'finished_at'    => "2022-04-04-06:30",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);

        $data = [
            'title' => 'Tidur',
            'description'    => 'dah malem cepet tidur!!!',
            'finished_at'    => "2022-04-04-23:00",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}