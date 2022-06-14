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
                'name' => 'Pro Techstack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit2',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit3',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit4',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit5',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit6',
            ],
            [
                'camp_id' => 1,
                'name' => 'Pro Techstack Kit7',
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit8',
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit9',
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit10',
            ],
            [
                'camp_id' => 2,
                'name' => 'Pro Techstack Kit11',
            ],
        ];

        foreach ($campBenefits as $key => $cb) {
            CampBenefit::create($cb);
        }
    }
}
