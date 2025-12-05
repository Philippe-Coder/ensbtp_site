<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacksTableSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('packs')->insert([
            [
                'code' => 'Pack00',
                'name' => 'Pack00',
                'min_salary' => null,
                'max_salary' => null,
                'description' => 'Privé, commerçants, diasporas, etc.',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'Pack1',
                'name' => 'Pack1 (Classic)',
                'min_salary' => 0,
                'max_salary' => 100000,
                'description' => 'SMIG / jusqu\'à 100 000 CFA',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'Pack2',
                'name' => 'Pack2 (Basique simple)',
                'min_salary' => 100001,
                'max_salary' => 200000,
                'description' => '100 001 - 200 000 CFA',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'Pack3',
                'name' => 'Pack3 (Basique - Basique)',
                'min_salary' => 200001,
                'max_salary' => 500001,
                'description' => '200 001 - 500 001 CFA',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'Pack4',
                'name' => 'Pack4 (Basique Fort)',
                'min_salary' => 600000,
                'max_salary' => 999999,
                'description' => '600 000 - 999 999 CFA',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'code' => 'Pack5',
                'name' => 'Pack5 (VIP)',
                'min_salary' => 1000000,
                'max_salary' => null,
                'description' => '1 000 000 CFA et plus',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
