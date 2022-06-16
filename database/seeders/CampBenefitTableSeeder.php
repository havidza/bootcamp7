<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => 1,
                'name' => 'Akses materi selamanya'
            ],
            [
                'camp_id' => 1,
                'name' => 'Program Mentoring'
            ],
            [
                'camp_id' => 1,
                'name' => 'Belajar Secara Fleksibel'
            ],
            [
                'camp_id' => 1,
                'name' => 'Bebas Download PDF'
            ],
            [
                'camp_id' => 1,
                'name' => 'Mendapatkan Sertifikat'
            ],
            [
                'camp_id' => 2,
                'name' => 'Akses materi selamanya'
            ],
            [
                'camp_id' => 2,
                'name' => 'Program Mentoring'
            ],
            [
                'camp_id' => 2,
                'name' => 'Belajar Secara Fleksibel'
            ],
        ];

        CampBenefit::insert($campBenefits);
    }
}
