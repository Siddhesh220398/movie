<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert([
            ['name' => 'Argentina', 'code' => 'AR', 'country_code' => '+54'],
            ['name' => 'Belgium', 'code' => 'BEL', 'country_code' => '+32'],
            ['name' => 'China', 'code' => 'CH', 'country_code' => '+86'],
            ['name' => 'Finland', 'code' => 'FN', 'country_code' => '+358'],
            ['name' => 'Hong Kong', 'code' => 'HK', 'country_code' => '+852'],
            ['name' => 'Ireland', 'code' => 'IR', 'country_code' => '+353'],
            ['name' => 'Japan', 'code' => 'JP', 'country_code' => '+81'],
            ['name' => 'Netherlands', 'code' => 'NL', 'country_code' => '+31'],
            ['name' => 'Poland', 'code' => 'PO', 'country_code' => '+48'],
            ['name' => 'South Africa', 'code' => 'AF', 'country_code' => '+27'],
            ['name' => 'Sweaden', 'code' => 'SW', 'country_code' => '+46'],
            ['name' => 'Thailand', 'code' => 'TH', 'country_code' => '+66'],
            ['name' => 'Australia', 'code' => 'AUS', 'country_code' => '+61'],
            ['name' => 'Austria', 'code' => 'AUT', 'country_code' => '+43'],
            ['name' => 'Brazil', 'code' => 'BZ', 'country_code' => '++55'],
            ['name' => 'Czech Republic', 'code' => 'CR', 'country_code' => '+420'],
            ['name' => 'France', 'code' => 'FR', 'country_code' => '+33'],
            ['name' => 'Israel', 'code' => 'IS', 'country_code' => '+972'],
            ['name' => 'Luxembourg', 'code' => 'BRB', 'country_code' => '+352'],
            ['name' => 'New Zealand', 'code' => 'NZ', 'country_code' => '+64'],
            ['name' => 'Romania', 'code' => 'RM', 'country_code' => '+40'],
            ['name' => 'South Korea', 'code' => 'SK', 'country_code' => '+82'],
            ['name' => 'Switzerland', 'code' => 'SZ', 'country_code' => '+41'],
            ['name' => 'United Kingdom', 'code' => 'UK', 'country_code' => '+44'],
            ['name' => 'Canada', 'code' => 'CD', 'country_code' => '+1'],
            ['name' => 'Danmark', 'code' => 'DN', 'country_code' => '+45'],
            ['name' => 'Germany', 'code' => 'GR', 'country_code' => '+49'],
            ['name' => 'India', 'code' => 'IND', 'country_code' => '+91'],
            ['name' => 'Italy', 'code' => 'IT', 'country_code' => '+39'],
            ['name' => 'Mexico', 'code' => 'MX', 'country_code' => '+52'],
            ['name' => 'Norway', 'code' => 'BGR', 'country_code' => '+47'],
            ['name' => 'Russia', 'code' => 'RS', 'country_code' => '+7'],
            ['name' => 'Spain', 'code' => 'SP', 'country_code' => '+34'],
            ['name' => 'Taiwan', 'code' => 'TW', 'country_code' => '+886'],
            ['name' => 'United States of America', 'code' => 'US', 'country_code' => '+1'],
        ]);
    }
}
