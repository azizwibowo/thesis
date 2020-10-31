<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 19,
            'jenisUjian' => 0,
            'nipyPenguji1' => '029',
            'nipyPenguji2' => '003'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 22,
            'jenisUjian' => 0,
            'nipyPenguji1' => '035',
            'nipyPenguji2' => '027'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 18,
            'jenisUjian' => 0,
            'nipyPenguji1' => '029',
            'nipyPenguji2' => '023',
            'tanggalSemprop' => '2020-01-08'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 16,
            'jenisUjian' => 0,
            'nipyPenguji1' => '023',
            'nipyPenguji2' => '003',
            'tanggalSemprop' => '2020-01-03'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 20,
            'jenisUjian' => 0,
            'nipyPenguji1' => '029',
            'nipyPenguji2' => '006'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 15,
            'jenisUjian' => 0,
            'nipyPenguji1' => '023',
            'nipyPenguji2' => '031',
            'tanggalSemprop' => '2020-01-03'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 17,
            'jenisUjian' => 0,
            'nipyPenguji1' => '016',
            'nipyPenguji2' => '031',
            'tanggalSemprop' => '2020-01-03'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 23,
            'jenisUjian' => 0,
            'nipyPenguji1' => '032',
            'nipyPenguji2' => '035',
            'tanggalSemprop' => '2018-09-27',
            'tanggalPendadaran' => '2019-01-14'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 24,
            'jenisUjian' => 0,
            'nipyPenguji1' => '006',
            'nipyPenguji2' => '019',
            'tanggalSemprop' => '2019-01-03',
            'tanggalPendadaran' => '2020-07-09'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 21,
            'jenisUjian' => 0,
            'nipyPenguji1' => '023',
            'nipyPenguji2' => '008'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 8,
            'jenisUjian' => 0,
            'nipyPenguji1' => '033',
            'nipyPenguji2' => '012'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 11,
            'jenisUjian' => 0,
            'nipyPenguji1' => '025',
            'nipyPenguji2' => '011'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 4,
            'jenisUjian' => 0,
            'nipyPenguji1' => '005',
            'nipyPenguji2' => '025'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 9,
            'jenisUjian' => 0,
            'nipyPenguji1' => '023',
            'nipyPenguji2' => '033'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 25,
            'jenisUjian' => 0,
            'nipyPenguji1' => '019',
            'nipyPenguji2' => '027',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-07-25'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 26,
            'jenisUjian' => 0,
            'nipyPenguji1' => '006',
            'nipyPenguji2' => '023',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-05-28'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 27,
            'jenisUjian' => 0,
            'nipyPenguji1' => '020',
            'nipyPenguji2' => '029',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-05-28'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 28,
            'jenisUjian' => 0,
            'nipyPenguji1' => '006',
            'nipyPenguji2' => '019',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-06-24'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 29,
            'jenisUjian' => 0,
            'nipyPenguji1' => '039',
            'nipyPenguji2' => '023',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-07-03'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 30,
            'jenisUjian' => 0,
            'nipyPenguji1' => '019',
            'nipyPenguji2' => '006',
            'tanggalSemprop' => '2019-02-01',
            'tanggalPendadaran' => '2019-06-24'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 31,
            'jenisUjian' => 0,
            'nipyPenguji1' => '019',
            'nipyPenguji2' => '006',
            'tanggalSemprop' => '2020-01-02',
            'tanggalPendadaran' => '2020-09-16'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 32,
            'jenisUjian' => 0,
            'nipyPenguji1' => '019',
            'nipyPenguji2' => '031',
            'tanggalSemprop' => '2019-01-01',
            'tanggalPendadaran' => '2019-10-03'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 33,
            'jenisUjian' => 0,
            'nipyPenguji1' => '035',
            'nipyPenguji2' => '019',
            'tanggalSemprop' => '2018-03-27',
            'tanggalPendadaran' => '2018-05-11'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 34,
            'jenisUjian' => 0,
            'nipyPenguji1' => '035',
            'nipyPenguji2' => '027',
            'tanggalSemprop' => '2018-03-01',
            'tanggalPendadaran' => '2018-06-02'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 35,
            'jenisUjian' => 0,
            'nipyPenguji1' => '027',
            'nipyPenguji2' => '035',
            'tanggalSemprop' => '2018-02-24',
            'tanggalPendadaran' => '2018-05-19'
        ]);

        DB::table('ujian')->insert([
            'idTopikSkripsiFK' => 2,
            'jenisUjian' => 0,
            'nipyPenguji1' => '008',
            'nipyPenguji2' => '026',
            'tanggalSemprop' => '2017-03-22',
            'tanggalPendadaran' => '2018-01-31'
        ]);

    }
}
