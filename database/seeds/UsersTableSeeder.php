<?php
declare(strict_types = 1);

namespace Database\Seeds;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

final class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($loop = 1; $loop < 100; $loop++) {
            $name = (string)($loop) . 'takeokunn';
            $email = $name . '@gmail.com';
            $password = bcrypt($name);

            \DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
