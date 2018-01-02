<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ahmad Tantowi, Sp.A.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Susi Prameswari, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Karya, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Shinta Romi, Sp.A.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Andi Nasution, Sp.A.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ani Rosiana, Sp.A.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '1'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mukti Mulyo, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Melly Sita, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Riki Moris, Sp.B.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Khusus Bedah Soedirman',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Mulya, Sp.B.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mukti Mulyo, Sp.B.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Pori Limbong, Sp.B.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '2'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mitha Kusmini, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Elza Syarif, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Budi Sudarsono, Sp.BS.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Lusi Putri, Sp.BS.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Sinta Putri, Sp.BS.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Miftah Rolly, Sp.BS.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Khusus Bedah Soedirman',
            'spesialisasi_id' => '3'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dedi Kurniawan, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dedi Ramadhan, Sp.Ort.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Fadhila Musyafira, Sp.Ort.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Lili Saputri, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Mutia Rossa, Sp.Ort.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Marwan Gofur, Sp.Ort.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '4'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Suparman Basir, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS. Sardjito',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dwi Putri, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS. Bethesda',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Sudirman Said, Sp.KK.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Suwarno Suryo, Sp.KK.',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Abdul Hafiz, Sp.KK.',
            'alamat_doctor' => 'Kota Yogyakarta',
            'status' => 'Dokter Tetap RS Jogja International Hospital',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Andani Rahmawati, Sp.KK.',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS Bethesda',
            'spesialisasi_id' => '5'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Fulan Attaki Sp.KK',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Jogja Internasional Hospital',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Al Fatih Sp.KK',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS. Jogja Internasional Hospital',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Al Ghazali Sp.KK',
            'alamat_doctor' => 'Jl. Godean',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ahmad Sp.KK',
            'alamat_doctor' => 'Kota Baru  ',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Latif Sp.KK',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Jogja Internasional Hospital',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Dirga Sp.KK',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Bethesda',
            'spesialisasi_id' => '6'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Ali Sp.M',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. PKU Yogyakarta',
            'spesialisasi_id' => '7'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Umar Sp.M',
            'alamat_doctor' => 'Kota Baru',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '7'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Utsman Sp.M',
            'alamat_doctor' => 'Sleman',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '7'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Steven Sp.M',
            'alamat_doctor' => 'Jl. A M Sangaji',
            'status' => 'Dokter Tetap RS. PKU Yogyakarta',
            'spesialisasi_id' => '7'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Kara Sp.M',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '7'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Abdul Sp.PD',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '8'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Susanti Sp.PD',
            'alamat_doctor' => 'Jl. Damai No. 27',
            'status' => 'Dokter Tetap RS. Bethesda',
            'spesialisasi_id' => '8'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Sinta Sp.PD',
            'alamat_doctor' => 'Jetis',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '8'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Legowo Sp.PD',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '8'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Said Sp.PD',
            'alamat_doctor' => 'Pogung',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '8'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr.Hidayat Sp.S',
            'alamat_doctor' => 'Monjali',
            'status' => 'Dokter Tetap RS. PKU Yogyakarta',
            'spesialisasi_id' => '9'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Taufik Sp.S',
            'alamat_doctor' => 'Jl. Anggajaya',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '9'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Isnaini Sp.S',
            'alamat_doctor' => 'Bantul',
            'status' => 'Dokter Tetap RS. PKU Yogyakarta',
            'spesialisasi_id' => '9'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. David Sp.S',
            'alamat_doctor' => 'Gejayan',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '9'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Daud Sp.S',
            'alamat_doctor' => 'Jl. Kaliurang',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '9'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Shafin Sp.THT-KL',
            'alamat_doctor' => 'Kota Baru',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '10'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Shafar Sp.THT-KL',
            'alamat_doctor' => 'Kota Baru',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '10'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Aasiyah Sp.THT-KL',
            'alamat_doctor' => 'Jl. Ring Road Utara',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '10'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Shafaq Sp.THT-KL',
            'alamat_doctor' => 'Jl. Magelang',
            'status' => 'Dokter Tetap RS. JIH',
            'spesialisasi_id' => '10'
        ]);

        DB::table('doctors')->insert([
            'nama_doctor' => 'Dr. Aaqib Sp.THT-KL',
            'alamat_doctor' => 'Jl. Magelang',
            'status' => 'Dokter Tetap RS. Panti Rapih',
            'spesialisasi_id' => '10'
        ]);
    }
}
