<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->insert([[
            'head_id' => 1,
            'name' => "АУП"
        ],
        [
            'head_id' => 2,
            'name' => "Сектор по изучению конкурентоспособности отраслей экономики и инвестиционной актианости"
        ],
        [
            'head_id' => 3,
            'name' => "Сектор по социально-экономическу развитию регионов"
        ],
        [
            'head_id' => 4,
            'name' => "Сектор по развитию деятелности промышленных кластеров"
        ],
        [
            'head_id' => 5,
            'name' => "Сектор по изучению согласованности параметров макроэкономической политики и прогнозирования"
        ],
        [
            'head_id' => 6,
            'name' => "Сектор по изучению деятелности в банковско-финансовой сфере и на рынке капитала"
        ],
        [
            'head_id' => 6,
            'name' => "Сектор по изучению внешнеэкономической деятельности интеграционный процессов"
        ],
        [
            'head_id' => 7,
            'name' => "Сектор по связям с общественностью и маркетинга"
        ],
        [
            'head_id' => 8,
            'name' => "Сектор по внедрению IT технологий и интеграций баз данных"
        ],
        [
            'head_id' => 9,
            'name' => "Акселератор социално-экономических реформ"
        ]
        ]);

    }
}
