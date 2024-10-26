<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('details')->insert([
            ['user_id' => '1',
             'content' => '食費',
             'amount' => 2900,
             'created_at' => new DateTime(),
             'updated_at' => new DateTime(),
             'deleted_at' => null,],
        ]);
    }
}
