<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'libelleService' => 'Informatique',
        ]);

        DB::table('commissions')->insert([
            'libelleCommission' => 'Commission bonne',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'prenomUser' => 'Triomphe',
            'numUser' => 98729298,
            'email' => 'admin@black.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
            'service_id' => 1,
            'commission_id' => 1
        ]);
    }
}
