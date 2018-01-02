<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DoctorSeeder::class);
        $this->call(SpesialisasiSeeder::class);
        $this->call(TempatSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JadwalSeeder::class);
    }
}