<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //satu data
        // $data = [
        //     'name_user' => 'Administrator',
        //     'email_user' => 'yandika.ismananda@gmail.com',
        //     'password_user' => password_hash('admin', PASSWORD_BCRYPT),
        // ];
        // $this->db->table('users')->insert($data);

        //banyak data
        $data = [
            [
                'name_user' => 'Agung',
                'email_user' => 'agung@gmail.com',
                'password_user' => password_hash('admin', PASSWORD_BCRYPT),   
            ],
            [
                'name_user' => 'M. Arifin',
                'email_user' => 'm.arifin@gmail.com',
                'password_user' => password_hash('123', PASSWORD_BCRYPT),   
            ]
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
