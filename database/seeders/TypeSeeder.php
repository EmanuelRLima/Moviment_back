<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_skil')->insert([
            ['name' => 'Fire'],
            ['name' => 'Dark']
        ]);
    }
}

// php artisan migrate:fresh --seed // php artisan db:seed --class=TypeSeeder // php artisan make:seeder NOMEDOSEEDER