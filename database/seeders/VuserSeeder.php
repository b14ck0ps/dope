<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vuser;
use Faker\Factory as Faker;

class VuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            $vuser = new Vuser();
            $vuser->username = $faker->username;
            $vuser->email = $faker->email;
            $vuser->password = $faker->password;
            $vuser->save();
        }
    }
}
