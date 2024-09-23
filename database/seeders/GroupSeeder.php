<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        for ($i = 1;$i <= 10 ; $i++) {
            DB::table('groups')->insert([
                'title' => Str::random(2),
                'start_from' => '2024-01-10',
                'is_active' => true,
                'created_at' => date("Y-m-d H:i:s"),
                "updated_at"=> date("Y-m-d H:i:s"),
            ]);
            }
        }
    }
