<?php

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '12:00',
            'tempat_id' => '2',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '2',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '6',
            'doctor_id' => '1'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '3',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '1',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '7',
            'doctor_id' => '2'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '4',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '8',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '12',
            'doctor_id' => '3'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '6',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '10',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '15',
            'doctor_id' => '4'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '11',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '12',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '16',
            'doctor_id' => '5'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '13',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '14',
            'doctor_id' => '6'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '5',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '3',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '1',
            'doctor_id' => '7'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '7',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '4',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '5',
            'doctor_id' => '8'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '9',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '9'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '10:00',
            'tempat_id' => '10',
            'doctor_id' => '10'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '9',
            'doctor_id' => '10'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '10'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '15:30',
            'tempat_id' => '6',
            'doctor_id' => '11'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '13:00',
            'tempat_id' => '3',
            'doctor_id' => '11'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '11'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '4',
            'doctor_id' => '12'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:30',
            'waktu_akhir' => '14:00',
            'tempat_id' => '9',
            'doctor_id' => '12'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '11',
            'doctor_id' => '12'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '08:30',
            'waktu_akhir' => '13:00',
            'tempat_id' => '8',
            'doctor_id' => '13'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '2',
            'doctor_id' => '13'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '11',
            'doctor_id' => '13'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '2',
            'doctor_id' => '14'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '17:00',
            'tempat_id' => '4',
            'doctor_id' => '14'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '11',
            'doctor_id' => '14'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '2',
            'doctor_id' => '15'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '13:30',
            'tempat_id' => '3',
            'doctor_id' => '15'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '15'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '1',
            'doctor_id' => '16'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '3',
            'doctor_id' => '16'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '15',
            'doctor_id' => '16'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '14:30',
            'tempat_id' => '1',
            'doctor_id' => '17'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '11:30',
            'waktu_akhir' => '15:30',
            'tempat_id' => '3',
            'doctor_id' => '17'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '15',
            'doctor_id' => '17'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '8',
            'doctor_id' => '18'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '9',
            'doctor_id' => '18'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '16',
            'doctor_id' => '18'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '09:30',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '19'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:30',
            'waktu_akhir' => '16:30',
            'tempat_id' => '1',
            'doctor_id' => '19'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '07:30',
            'waktu_akhir' => '16:00',
            'tempat_id' => '16',
            'doctor_id' => '19'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '5',
            'doctor_id' => '20'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '7',
            'doctor_id' => '20'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '11',
            'doctor_id' => '20'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '13:00',
            'tempat_id' => '1',
            'doctor_id' => '21'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '8',
            'doctor_id' => '21'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '16',
            'doctor_id' => '21'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '22'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '08:30',
            'waktu_akhir' => '15:30',
            'tempat_id' => '8',
            'doctor_id' => '22'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '11',
            'doctor_id' => '22'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '10',
            'doctor_id' => '23'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '1',
            'doctor_id' => '23'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '16',
            'doctor_id' => '23'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '4',
            'doctor_id' => '24'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '19:00',
            'tempat_id' => '11',
            'doctor_id' => '24'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '13',
            'doctor_id' => '24'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '1',
            'doctor_id' => '25'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '19:00',
            'tempat_id' => '4',
            'doctor_id' => '25'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '12',
            'doctor_id' => '25'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '12',
            'doctor_id' => '26'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '16',
            'doctor_id' => '26'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '9',
            'doctor_id' => '26'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '6',
            'doctor_id' => '27'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '9',
            'doctor_id' => '27'
        ]);

        DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '8',
            'doctor_id' => '27'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '9',
            'doctor_id' => '28'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '1',
            'doctor_id' => '28'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '3',
            'doctor_id' => '28'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '2',
            'doctor_id' => '29'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '8',
            'doctor_id' => '29'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '6',
            'doctor_id' => '29'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '11',
            'doctor_id' => '30'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '12',
            'doctor_id' => '30'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '5',
            'doctor_id' => '30'
        ]);
         DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '3',
            'doctor_id' => '31'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '16',
            'doctor_id' => '31'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '14',
            'doctor_id' => '31'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '8',
            'doctor_id' => '32'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '10',
            'doctor_id' => '32'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '11',
            'doctor_id' => '32'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '9',
            'doctor_id' => '33'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '1',
            'doctor_id' => '33'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '4',
            'doctor_id' => '33'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '2',
            'doctor_id' => '34'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '10',
            'doctor_id' => '34'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '5',
            'doctor_id' => '34'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '18:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '15',
            'doctor_id' => '35'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '17:00',
            'waktu_akhir' => '19:00',
            'tempat_id' => '16',
            'doctor_id' => '35'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '15:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '2',
            'doctor_id' => '35'
        ]);

         DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '5',
            'doctor_id' => '36'
        ]);

          DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '18:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '13',
            'doctor_id' => '36'
        ]);

           DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '15',
            'doctor_id' => '36'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '2',
            'doctor_id' => '37'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '5',
            'doctor_id' => '37'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '13',
            'doctor_id' => '37'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '8',
            'doctor_id' => '38'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '10',
            'doctor_id' => '38'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '18:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '14',
            'doctor_id' => '38'
        ]);

            DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '8',
            'doctor_id' => '39'
        ]);

             DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '12',
            'doctor_id' => '39'
        ]);

              DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '10',
            'doctor_id' => '39'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '19:00',
            'waktu_akhir' => '21:00',
            'tempat_id' => '3',
            'doctor_id' => '40'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '3',
            'doctor_id' => '40'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '3',
            'doctor_id' => '40'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '1',
            'doctor_id' => '41'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '1',
            'doctor_id' => '41'
        ]);

               DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '1',
            'doctor_id' => '41'
        ]);

		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '10',
            'doctor_id' => '42'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '5',
            'doctor_id' => '42'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '8',
            'doctor_id' => '42'
        ]);
		
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '43'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '7',
            'doctor_id' => '43'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '10',
            'doctor_id' => '43'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '13',
            'doctor_id' => '44'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '16',
            'doctor_id' => '44'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '15:00',
            'waktu_akhir' => '19:00',
            'tempat_id' => '3',
            'doctor_id' => '44'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '16:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '6',
            'doctor_id' => '45'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '9',
            'doctor_id' => '45'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '11:00',
            'tempat_id' => '12',
            'doctor_id' => '45'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '15',
            'doctor_id' => '46'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '13:00',
            'tempat_id' => '2',
            'doctor_id' => '46'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '5',
            'doctor_id' => '46'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '13:00',
            'tempat_id' => '8',
            'doctor_id' => '47'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '11',
            'doctor_id' => '47'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '15:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '14',
            'doctor_id' => '47'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '1',
            'doctor_id' => '48'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '48'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '7',
            'doctor_id' => '48'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '10',
            'doctor_id' => '49'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '14',
            'doctor_id' => '49'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '2',
            'doctor_id' => '49'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '16:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '6',
            'doctor_id' => '50'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '13:00',
            'tempat_id' => '10',
            'doctor_id' => '50'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Jumat',
            'waktu_mulai' => '11:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '15',
            'doctor_id' => '50'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '51'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '13:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '9',
            'doctor_id' => '51'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '14',
            'doctor_id' => '51'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '10:00',
            'tempat_id' => '3',
            'doctor_id' => '52'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '8',
            'doctor_id' => '52'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '13:00',
            'tempat_id' => '13',
            'doctor_id' => '52'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '2',
            'doctor_id' => '53'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '17',
            'doctor_id' => '53'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '14:00',
            'tempat_id' => '6',
            'doctor_id' => '53'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Selasa',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '3',
            'doctor_id' => '54'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '08:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '10',
            'doctor_id' => '54'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '19:00',
            'tempat_id' => '11',
            'doctor_id' => '54'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '09:00',
            'waktu_akhir' => '17:00',
            'tempat_id' => '1',
            'doctor_id' => '55'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Kamis',
            'waktu_mulai' => '10:00',
            'waktu_akhir' => '15:00',
            'tempat_id' => '4',
            'doctor_id' => '55'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '14:00',
            'waktu_akhir' => '18:00',
            'tempat_id' => '7',
            'doctor_id' => '55'
        ]);

		DB::table('jadwals')->insert([
            'hari' => 'Senin',
            'waktu_mulai' => '15:00',
            'waktu_akhir' => '20:00',
            'tempat_id' => '16',
            'doctor_id' => '56'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Rabu',
            'waktu_mulai' => '07:00',
            'waktu_akhir' => '12:00',
            'tempat_id' => '11',
            'doctor_id' => '56'
        ]);
		
		DB::table('jadwals')->insert([
            'hari' => 'Sabtu',
            'waktu_mulai' => '12:00',
            'waktu_akhir' => '16:00',
            'tempat_id' => '10',
            'doctor_id' => '56'
        ]);



    }
}
