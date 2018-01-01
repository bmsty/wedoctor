<?php

use Illuminate\Database\Seeder;

class SpesialisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Anak',
            'deskripsi_spesialisasi' => 'Spesialisasi Anak berkonsentrasi pada pencegahan, diagnosis, pengobatan dan penanganan seluruh jenis penyakit pada pasien berusia muda, yaitu bayi dan anak hingga remaja atau dewasa muda.'
        ]);

        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Bedah',
            'deskripsi_spesialisasi' => 'Spesialisasi Bedah berkkonsentrasi pada pengobatan penyakit atau luka dengan operasi manual dan instrumen.'
        ]);

        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Bedah Saraf',
            'deskripsi_spesialisasi' => 'Spesialisasi Bedah Saraf berkonsentrasi pada pencegahan, diagnosa, pengobatan dan rehabilitasi setiap gangguan pada sistem persarafan seperti otak,medula spinalis,persarafan perifer dan sistem serebrovaskular ekstra kranial.'
        ]);

        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Gigi',
            'deskripsi_spesialisasi' => 'Spesialisasi Gigi berkonsentrasi pada pencegahan dan perawatan penyakit atau kelainan pada gigi dan mulut melalui tindakan tanpa atau dengan pembedahan.'
        ]);
        
        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Kelamin',
            'deskripsi_spesialisasi' => 'Spesialisasi Kelamin berkonsentrasi pada penanganan penyakit menular seksual.'
        ]);
        
        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Kulit',
            'deskripsi_spesialisasi' => 'Spesialisasi Kulit berkonsentrasi pada permasalahan yang mencakup kulit, rambut, kulit kepala, kuku, dan penyakit lain yang serupa.'
        ]);
    
        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Mata',
            'deskripsi_spesialisasi' => 'Spesialisasi Mata berkonsentrasi pada diagnose, penangan dan pencegahan dari kerusakan, cedera dan penyakit mata bagi semua individu dari segala umur.'
        ]);
        
        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Penyakit Dalam',
            'deskripsi_spesialisasi' => 'Spesialisasi Penyakit Dalam berkonsentrasi pada penanganan seluruh penyakit non bedah pada orang dewasa kecuali penyakit saraf , kandungan, dan jiwa.'
        ]);

        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi Saraf',
            'deskripsi_spesialisasi' => 'Spesialisasi Saraf berkonsentrasi khususkan untuk mendiagnosis, merawat, dan memanejemen pasien dan kelainan saraf.'
        ]);

        DB::table('spesialisasis')->insert([
            'nama_spesialisasi' => 'Spesialisasi THT',
            'deskripsi_spesialisasi' => 'Spesialisasi THT (Telinga Hidung dan Tenggorokan) berkonsentrasi khusus untuk meneliti, mendiagnosis, dan mengobati penyakit telinga, hidung, tenggorok serta kepala dan leher.'
        ]);
    }
}
