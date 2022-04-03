<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class DimensionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = ['flat_cover', '3d_book_cover', '3d_cd_cover'];
        $width = [816, 1620, 1440];
        $height = [1056, 970, 720];
        for($i = 0; $i < count($types); $i++){
            DB::table('dimensions')->insert([
                'unique_id' => Str::random(15),
                'width' => $width[$i],
                'height' => $height[$i],
                'type' => $types[$i],
            ]);
        }
    }
}
