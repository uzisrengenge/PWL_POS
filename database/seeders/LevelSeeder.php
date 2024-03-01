<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'level_name'=>'Adminstrator', 'level_kode' => 'ADM' ],
            ['level_id' => 2, 'level_name'=>'Manager', 'level_kode' => 'MNG' ],
            ['level_id' => 3, 'level_name'=>'Staff/kasir', 'level_kode' => 'Stf' ],
        ];
        DB::table('m_level')->insert($data);
    }
}
