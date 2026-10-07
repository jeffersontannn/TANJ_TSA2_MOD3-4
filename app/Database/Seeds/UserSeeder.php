<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Update existing user with new email and password
        $this->db->table('users')
            ->where('username', 'jefferson')
            ->update([
                'email' => 'tanjeffersonemmanuelcheng@gmail.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
            ]);
    }
}
