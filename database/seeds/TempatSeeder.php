<?php

use Illuminate\Database\Seeder;

class TempatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit Panti Rapih',
            'alamat' => 'Jalan Cik Di Tiro'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit Sardjito',
            'alamat' => 'Jalan Perumnas UGM'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit Bethesda',
            'alamat' => 'Jalan Jendral Sudirman'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit Gramedika',
            'alamat' => 'Jalan Besi Jangkang'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit Sakinah Idaman',
            'alamat' => 'Jalan C.Simanjuntak'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Home Care Clinic',
            'alamat' => 'Jalan Paragntritis'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Puskesmas Condong',
            'alamat' => 'Jalan Perumnas Condong Catur'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Praktik Kotabaru',
            'alamat' => 'Jalan Abu Bakar Ali'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit JIH',
            'alamat' => 'Jalan Ring Road Utara'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Klinik Nirmala',
            'alamat' => 'Jalan Ring Road Selatan'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Klinik Sahati',
            'alamat' => 'Jalan Ring Road Utara'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit PKU Kota Jogja',
            'alamat' => 'Jalan Bhayangkara'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit PKU Gamping',
            'alamat' => 'Jalan Wates'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Rumah Sakit PKU Kota Gede',
            'alamat' => 'Jalan Kota Gede'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Klinik Sehat',
            'alamat' => 'Jalan Anggajaya'
        ]);

        DB::table('tempats')->insert([
            'tempat' => 'Klinik Keluarga',
            'alamat' => 'Jalan Sosrodipuran'
        ]);
    }
}
