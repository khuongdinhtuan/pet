<?php

use Illuminate\Database\Seeder;
use App\Models\Zodiac;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ZodiacsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zodiacs')->truncate();
        Zodiac::create([
          'name' => 'BẠCH DƯƠNG',
          'start_date' => '03-21',
          'end_date' => '04-20'
        ]);
        Zodiac::create([
          'name' => 'KIM NGƯU',
          'start_date' => '04-21',
          'end_date' => '05-20'
        ]);
        Zodiac::create([
          'name' => 'SONG TỬ',
          'start_date' => '05-21',
          'end_date' => '06-21'
        ]);
        Zodiac::create([
          'name' => 'CỰ GIẢI',
          'start_date' => '06-22',
          'end_date' => '07-22'
        ]);
        Zodiac::create([
          'name' => 'SƯ TỬ',
          'start_date' => '07-23',
          'end_date' => '08-22'
        ]);
        Zodiac::create([
          'name' => 'XỬ NỮ',
          'start_date' => '08-23',
          'end_date' => '09-22'
        ]);
        Zodiac::create([
          'name' => 'THIÊN BÌNH',
          'start_date' => '09-23',
          'end_date' => '10-23'
        ]);
        Zodiac::create([
          'name' => 'BỌ CẠP',
          'start_date' => '10-24',
          'end_date' => '11-22'
        ]);
        Zodiac::create([
          'name' => 'NHÂN MÃ',
          'start_date' => '11-23',
          'end_date' => '12-21'
        ]);
        Zodiac::create([
          'name' => 'MA KẾT',
          'start_date' => '12-22',
          'end_date' => '01-19'
        ]);
        Zodiac::create([
          'name' => 'BẢO BÌNH',
          'start_date' => '01-20',
          'end_date' => '02-18'
        ]);
        Zodiac::create([
          'name' => 'SONG NGƯ',
          'start_date' => '02-19',
          'end_date' => '03-20'
        ]);
    }
}
