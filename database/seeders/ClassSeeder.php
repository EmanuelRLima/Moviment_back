<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            ['name' => 'Tank'],
            ['name' => 'mage'],
            ['name' => 'Fighter']
        ]);
    }
}

// php artisan migrate:fresh --seed // php artisan db:seed --class=ClassSeeder // php artisan make:seeder NOMEDOSEEDER