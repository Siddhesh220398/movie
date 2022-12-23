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
            ['name' => 'Afghanistan', 'code' => 'AFG', 'country_code' => '+93'],
            ['name' => 'Albania', 'code' => 'ALB', 'country_code' => '+355'],
            ['name' => 'Algeria', 'code' => 'DZA', 'country_code' => '+213'],
            ['name' => 'American Samoa', 'code' => 'ASM', 'country_code' => '+1 684'],
            ['name' => 'Andorra', 'code' => 'AND', 'country_code' => '+376'],
            ['name' => 'Angola', 'code' => 'AGO', 'country_code' => '+244'],
            ['name' => 'Anguilla', 'code' => 'AIA', 'country_code' => '+1 264'],
            ['name' => 'Antarctica', 'code' => 'AQ', 'country_code' => '+672'],
            ['name' => 'Antigua and Barbuda', 'code' => 'ATG', 'country_code' => '+1 268'],
            ['name' => 'Argentina', 'code' => 'ARG', 'country_code' => '+54'],
            ['name' => 'Armenia', 'code' => 'ARM', 'country_code' => '+374'],
            ['name' => 'Aruba', 'code' => 'ABW', 'country_code' => '+297'],
            ['name' => 'Australia', 'code' => 'AUS', 'country_code' => '+61'],
            ['name' => 'Austria', 'code' => 'AUT', 'country_code' => '+43'],
            ['name' => 'Azerbaijan', 'code' => 'AZE', 'country_code' => '+994'],
            ['name' => 'Bahamas', 'code' => 'BHS', 'country_code' => '+1 242'],
            ['name' => 'Bahrain', 'code' => 'BHR', 'country_code' => '+973'],
            ['name' => 'Bangladesh', 'code' => 'BGD', 'country_code' => '+880'],
            ['name' => 'Barbados', 'code' => 'BRB', 'country_code' => '+1 246'],
            ['name' => 'Belarus', 'code' => 'BLR', 'country_code' => '+375'],
            ['name' => 'Belgium', 'code' => 'BEL', 'country_code' => '+32'],
            ['name' => 'Belize', 'code' => 'BLZ', 'country_code' => '+501'],
            ['name' => 'Benin', 'code' => 'BEN', 'country_code' => '+229'],
            ['name' => 'Bermuda', 'code' => 'BMU', 'country_code' => '+1 441'],
            ['name' => 'Bhutan', 'code' => 'BTN', 'country_code' => '+975'],
            ['name' => 'Bolivia', 'code' => 'BOL', 'country_code' => '+591'],
            ['name' => 'Bosnia and Herzegovina', 'code' => 'BIH', 'country_code' => '+387'],
            ['name' => 'Botswana', 'code' => 'BWA', 'country_code' => '+267'],
            ['name' => 'British Indian Ocean Territory', 'code' => 'IO', 'country_code' => '+246'],
            ['name' => 'Brunei Darussalam', 'code' => 'BRN', 'country_code' => '+673'],
            ['name' => 'Bulgaria', 'code' => 'BGR', 'country_code' => '+359'],
            ['name' => 'Burkina Faso', 'code' => 'BFA', 'country_code' => '+226'],
            ['name' => 'Burundi', 'code' => 'BDI', 'country_code' => '+257'],
            ['name' => 'Cambodia', 'code' => 'KHM', 'country_code' => '+855'],
            ['name' => 'Cameroon', 'code' => 'CMR', 'country_code' => '+237'],
            ['name' => 'Canada', 'code' => 'CAN', 'country_code' => '+1'],
            ['name' => 'Cape Verde', 'code' => 'CPV', 'country_code' => '+238'],
            ['name' => 'Cayman Islands', 'code' => 'CYM', 'country_code' => '+1 345'],
            ['name' => 'Central African Republic', 'code' => 'CAF', 'country_code' => '+236'],
            ['name' => 'Chad', 'code' => 'TCD', 'country_code' => '+235'],
            ['name' => 'Chile', 'code' => 'CHL', 'country_code' => '+56'],
            ['name' => 'China', 'code' => 'CHN', 'country_code' => '+86'],
            ['name' => 'Christmas Island', 'code' => 'CX', 'country_code' => '+61 89164'],
            ['name' => 'Cocos (Keeling) Islands', 'code' => 'CC', 'country_code' => '+61 89162'],
            ['name' => 'Comoros', 'code' => 'COM', 'country_code' => '+269'],
            ['name' => 'Congo', 'code' => 'COG', 'country_code' => '+242'],
            ['name' => 'Congo, the Democratic Republic of the', 'code' => 'COD', 'country_code' => '+243'],
            ['name' => 'Cook Islands', 'code' => 'COK', 'country_code' => '+682'],
            ['name' => 'Costa Rica', 'code' => 'CRI', 'country_code' => '+506'],
            ['name' => 'Cote D\'Ivoire', 'code' => 'CIV', 'country_code' => '+225'],
            ['name' => 'Croatia', 'code' => 'HRV', 'country_code' => '+385'],
            ['name' => 'Cuba', 'code' => 'CUB', 'country_code' => '+53'],
            ['name' => 'Cyprus', 'code' => 'CYP', 'country_code' => '+357'],
            ['name' => 'Czech Republic', 'code' => 'CZE', 'country_code' => '+420'],
            ['name' => 'Denmark', 'code' => 'DNK', 'country_code' => '+45'],
            ['name' => 'Djibouti', 'code' => 'DJI', 'country_code' => '+253'],
            ['name' => 'Dominica', 'code' => 'DMA', 'country_code' => '+1 767'],
            ['name' => 'Dominican Republic', 'code' => 'DOM', 'country_code' => '+1 809, +1 829, +1 849'],
            ['name' => 'Ecuador', 'code' => 'ECU', 'country_code' => '+593'],
            ['name' => 'Egypt', 'code' => 'EGY', 'country_code' => '+20'],
            ['name' => 'El Salvador', 'code' => 'SLV', 'country_code' => '+503'],
            ['name' => 'Equatorial Guinea', 'code' => 'GNQ', 'country_code' => '+240'],
            ['name' => 'Eritrea', 'code' => 'ERI', 'country_code' => '+291'],
            ['name' => 'Estonia', 'code' => 'EST', 'country_code' => '+372'],
            ['name' => 'Ethiopia', 'code' => 'ETH', 'country_code' => '+251'],
            ['name' => 'Falkland Islands (Malvinas)', 'code' => 'FLK', 'country_code' => '+500'],
            ['name' => 'Faroe Islands', 'code' => 'FRO', 'country_code' => '+298'],
            ['name' => 'Fiji', 'code' => 'COL', 'country_code' => '+679'],
            ['name' => 'Finland', 'code' => 'FIN', 'country_code' => '+358'],
            ['name' => 'France', 'code' => 'FRA', 'country_code' => '+33'],
            ['name' => 'French Guiana', 'code' => 'COL', 'country_code' => '+594'],
            ['name' => 'French Polynesia', 'code' => 'PYF', 'country_code' => '+689'],
            ['name' => 'French Southern Territories', 'code' => 'TF', 'country_code' => '+262'],
            ['name' => 'Gabon', 'code' => 'GAB', 'country_code' => '+689'],
            ['name' => 'Gambia', 'code' => 'GMB', 'country_code' => '+220'],
            ['name' => 'Georgia', 'code' => 'GEO', 'country_code' => '+995'],
            ['name' => 'Germany', 'code' => 'DEU', 'country_code' => '+49'],
            ['name' => 'Ghana', 'code' => 'GHA', 'country_code' => '+233'],
            ['name' => 'Gibraltar', 'code' => 'GIB', 'country_code' => '+350'],
            ['name' => 'Greece', 'code' => 'GRC', 'country_code' => '+30'],
            ['name' => 'Greenland', 'code' => 'GRL', 'country_code' => '+299'],
            ['name' => 'Grenada', 'code' => 'GRD', 'country_code' => '+1 473'],
            ['name' => 'Guadeloupe', 'code' => 'GLP', 'country_code' => '+590'],
            ['name' => 'Guam', 'code' => 'GUM', 'country_code' => '+1 671'],
            ['name' => 'Guatemala', 'code' => 'GTM', 'country_code' => '+502'],
            ['name' => 'Guinea', 'code' => 'GIN', 'country_code' => '+224'],
            ['name' => 'Guinea-Bissau', 'code' => 'GNB', 'country_code' => '+245'],
            ['name' => 'Guyana', 'code' => 'GUY', 'country_code' => '+592'],
            ['name' => 'Haiti', 'code' => 'HTI', 'country_code' => '+509'],
            ['name' => 'Heard Island and Mcdonald Islands', 'code' => 'HM', 'country_code' => '+672'],
            ['name' => 'Holy See (Vatican City State)', 'code' => 'VAT', 'country_code' => '+379'],
            ['name' => 'Honduras', 'code' => 'HND', 'country_code' => '+504'],
            ['name' => 'Hong Kong', 'code' => 'HKG', 'country_code' => '+852'],
            ['name' => 'Hungary', 'code' => 'HUN', 'country_code' => '+36'],
            ['name' => 'Iceland', 'code' => 'ISL', 'country_code' => '+354'],
            ['name' => 'India', 'code' => 'IND', 'country_code' => '+91'],
            ['name' => 'Indonesia', 'code' => 'IDN', 'country_code' => '+62'],
            ['name' => 'Iran, Islamic Republic of', 'code' => 'IRN', 'country_code' => '+98'],
            ['name' => 'Iraq', 'code' => 'IRQ', 'country_code' => '+964'],
            ['name' => 'Ireland', 'code' => 'IRL', 'country_code' => '+353'],
            ['name' => 'Israel', 'code' => 'ISR', 'country_code' => '+972'],
            ['name' => 'Italy', 'code' => 'ITA', 'country_code' => '+39'],
            ['name' => 'Jamaica', 'code' => 'JAM', 'country_code' => '+1 658, +1 876'],
            ['name' => 'Japan', 'code' => 'JPN', 'country_code' => '+81'],
            ['name' => 'Jordan', 'code' => 'COL', 'country_code' => '+962'],
            ['name' => 'Kazakhstan', 'code' => 'KAZ', 'country_code' => '+7 6, +7 7[notes 1]'],
            ['name' => 'Kenya', 'code' => 'KEN', 'country_code' => '+254'],
            ['name' => 'Kiribati', 'code' => 'KIR', 'country_code' => '+686'],
            ['name' => 'Korea, Democratic People\'s Republic of', 'code' => 'PRK', 'country_code' => '+850'],
            ['name' => 'Korea, Republic of', 'code' => 'KOR', 'country_code' => '+82'],
            ['name' => 'Kuwait', 'code' => 'KWT', 'country_code' => '+965'],
            ['name' => 'Kyrgyzstan', 'code' => 'KGZ', 'country_code' => '+996'],
            ['name' => 'Lao People\'s Democratic Republic', 'code' => 'LAO', 'country_code' => '+856'],
            ['name' => 'Latvia', 'code' => 'LVA', 'country_code' => '+371'],
            ['name' => 'Lebanon', 'code' => 'LBN', 'country_code' => '+961'],
            ['name' => 'Lesotho', 'code' => 'LSO', 'country_code' => '+266'],
            ['name' => 'Liberia', 'code' => 'LBR', 'country_code' => '+231'],
            ['name' => 'Libyan Arab Jamahiriya', 'code' => 'LBY', 'country_code' => '+218'],
            ['name' => 'Liechtenstein', 'code' => 'LIE', 'country_code' => '+423'],
            ['name' => 'Lithuania', 'code' => 'LTU', 'country_code' => '+370'],
            ['name' => 'Luxembourg', 'code' => 'LUX', 'country_code' => '+352'],
            ['name' => 'Macao', 'code' => 'MAC', 'country_code' => '+853'],
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MKD', 'country_code' => '+389'],
            ['name' => 'Madagascar', 'code' => 'MDG', 'country_code' => '+261'],
            ['name' => 'Malawi', 'code' => 'MWI', 'country_code' => '+265'],
            ['name' => 'Malaysia', 'code' => 'MYS', 'country_code' => '+60'],
            ['name' => 'Maldives', 'code' => 'MDV', 'country_code' => '+960'],
            ['name' => 'Mali', 'code' => 'MLI', 'country_code' => '+223'],
            ['name' => 'Malta', 'code' => 'MLT', 'country_code' => '+356'],
            ['name' => 'Marshall Islands', 'code' => 'MHL', 'country_code' => '+692'],
            ['name' => 'Martinique', 'code' => 'MTQ', 'country_code' => '+596'],
            ['name' => 'Mauritania', 'code' => 'MRT', 'country_code' => '+222'],
            ['name' => 'Mauritius', 'code' => 'MUS', 'country_code' => '+230'],
            ['name' => 'Mayotte', 'code' => 'YT', 'country_code' => '+262 269, +262 639'],
            ['name' => 'Mexico', 'code' => 'MEX', 'country_code' => '+52'],
            ['name' => 'Micronesia, Federated States of', 'code' => 'FSM', 'country_code' => '+691'],
            ['name' => 'Moldova, Republic of', 'code' => 'MDA', 'country_code' => '+373'],
            ['name' => 'Monaco', 'code' => 'MCO', 'country_code' => '+377'],
            ['name' => 'Mongolia', 'code' => 'MNG', 'country_code' => '+976'],
            ['name' => 'Montserrat', 'code' => 'MSR', 'country_code' => '+1 664'],
            ['name' => 'Morocco', 'code' => 'MAR', 'country_code' => '+212'],
            ['name' => 'Mozambique', 'code' => 'MOZ', 'country_code' => '+258'],
            ['name' => 'Myanmar', 'code' => 'MMR', 'country_code' => '+95'],
            ['name' => 'Namibia', 'code' => 'NAM', 'country_code' => '+264'],
            ['name' => 'Nauru', 'code' => 'NRU', 'country_code' => '+674'],
            ['name' => 'Nepal', 'code' => 'NPL', 'country_code' => '+977'],
            ['name' => 'Netherlands', 'code' => 'NLD', 'country_code' => '+31'],
            ['name' => 'Netherlands Antilles', 'code' => 'ANT', 'country_code' => '+599'],
            ['name' => 'New Caledonia', 'code' => 'NCL', 'country_code' => '+687'],
            ['name' => 'New Zealand', 'code' => 'NZL', 'country_code' => '+64'],
            ['name' => 'Nicaragua', 'code' => 'NIC', 'country_code' => '+505'],
            ['name' => 'Niger', 'code' => 'NER', 'country_code' => '+227'],
            ['name' => 'Nigeria', 'code' => 'NGA', 'country_code' => '+234	'],
            ['name' => 'Niue', 'code' => 'NIU', 'country_code' => '+683'],
            ['name' => 'Norfolk Island', 'code' => 'NFK', 'country_code' => '+672 3'],
            ['name' => 'Northern Mariana Islands', 'code' => 'MNP', 'country_code' => '+1 670'],
            ['name' => 'Norway', 'code' => 'NOR', 'country_code' => '+47'],
            ['name' => 'Oman', 'code' => 'OMN', 'country_code' => '+968'],
            ['name' => 'Pakistan', 'code' => 'PAK', 'country_code' => '+92'],
            ['name' => 'Palau', 'code' => 'PLW', 'country_code' => '+680'],
            ['name' => 'Palestinian Territory, Occupied', 'code' => 'PS', 'country_code' => '+970'],
            ['name' => 'Panama', 'code' => 'PAN', 'country_code' => '+507'],
            ['name' => 'Papua New Guinea', 'code' => 'PNG', 'country_code' => '+675'],
            ['name' => 'Paraguay', 'code' => 'PRY', 'country_code' => '+595'],
            ['name' => 'Peru', 'code' => 'PER', 'country_code' => '+51'],
            ['name' => 'Philippines', 'code' => 'PHL', 'country_code' => '+63'],
            ['name' => 'Pitcairn', 'code' => 'PCN', 'country_code' => '+64	'],
            ['name' => 'Poland', 'code' => 'POL', 'country_code' => '+48'],
            ['name' => 'Portugal', 'code' => 'PRT', 'country_code' => '+351'],
            ['name' => 'Puerto Rico', 'code' => 'PRI', 'country_code' => '+1 787, +1 939'],
            ['name' => 'Qatar', 'code' => 'QAT', 'country_code' => '+974'],
            ['name' => 'Reunion', 'code' => 'REU', 'country_code' => '+262'],
            ['name' => 'Romania', 'code' => 'ROM', 'country_code' => '+40'],
            ['name' => 'Russian Federation', 'code' => 'RUS', 'country_code' => '+7[notes 1]'],
            ['name' => 'Rwanda', 'code' => 'RWA', 'country_code' => '+250'],
            ['name' => 'Saint Helena', 'code' => 'SHN', 'country_code' => '+290'],
            ['name' => 'Saint Kitts and Nevis', 'code' => 'KNA', 'country_code' => '+1 869'],
            ['name' => 'Saint Lucia', 'code' => 'LCA', 'country_code' => '+1 758'],
            ['name' => 'Saint Pierre and Miquelon', 'code' => 'SPM', 'country_code' => '+508'],
            ['name' => 'Saint Vincent and the Grenadines', 'code' => 'VCT', 'country_code' => '+1 784'],
            ['name' => 'Samoa', 'code' => 'WSM', 'country_code' => '+685'],
            ['name' => 'San Marino', 'code' => 'SMR', 'country_code' => '+378'],
            ['name' => 'Sao Tome and Principe', 'code' => 'STP', 'country_code' => '+239'],
            ['name' => 'Saudi Arabia', 'code' => 'SAU', 'country_code' => '+966'],
            ['name' => 'Senegal', 'code' => 'SEN', 'country_code' => '+221'],
            ['name' => 'Serbia and Montenegro', 'code' => 'CS', 'country_code' => '+381'],
            ['name' => 'Seychelles', 'code' => 'SYC', 'country_code' => '+248'],
            ['name' => 'Sierra Leone', 'code' => 'SLE', 'country_code' => '+232'],
            ['name' => 'Singapore', 'code' => 'SGP', 'country_code' => '+65'],
            ['name' => 'Slovakia', 'code' => 'SVK', 'country_code' => '+421'],
            ['name' => 'Slovenia', 'code' => 'SVN', 'country_code' => '+386'],
            ['name' => 'Solomon Islands', 'code' => 'SLB', 'country_code' => '+677'],
            ['name' => 'Somalia', 'code' => 'SOM', 'country_code' => '+252	'],
            ['name' => 'South Africa', 'code' => 'ZAF', 'country_code' => '+27'],
            ['name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS', 'country_code' => '+500'],
            ['name' => 'Spain', 'code' => 'ESP', 'country_code' => '+34'],
            ['name' => 'Sri Lanka', 'code' => 'LKA', 'country_code' => '+94'],
            ['name' => 'Sudan', 'code' => 'SDN', 'country_code' => '+249'],
            ['name' => 'Suriname', 'code' => 'SUR', 'country_code' => '+597'],
            ['name' => 'Svalbard and Jan Mayen', 'code' => 'SJM', 'country_code' => '+47 79'],
            ['name' => 'Swaziland', 'code' => 'SWZ', 'country_code' => '+268'],
            ['name' => 'Sweden', 'code' => 'SWE', 'country_code' => '+46'],
            ['name' => 'Switzerland', 'code' => 'CHE', 'country_code' => '+41'],
            ['name' => 'Syrian Arab Republic', 'code' => 'SYR', 'country_code' => '+963'],
            ['name' => 'Taiwan, Province of China', 'code' => 'TWN', 'country_code' => '+886'],
            ['name' => 'Tajikistan', 'code' => 'TJK', 'country_code' => '+992'],
            ['name' => 'Tanzania, United Republic of', 'code' => 'TZA', 'country_code' => '+255'],
            ['name' => 'Thailand', 'code' => 'THA', 'country_code' => '+66'],
            ['name' => 'Timor-Leste', 'code' => 'TL', 'country_code' => '+670'],
            ['name' => 'Togo', 'code' => 'TGO', 'country_code' => '+228'],
            ['name' => 'Tokelau', 'code' => 'TKL', 'country_code' => '+690'],
            ['name' => 'Tonga', 'code' => 'TON', 'country_code' => '+676'],
            ['name' => 'Trinidad and Tobago', 'code' => 'TTO', 'country_code' => '+1 868'],
            ['name' => 'Tunisia', 'code' => 'TUN', 'country_code' => '+216'],
            ['name' => 'Turkey', 'code' => 'TUR', 'country_code' => '+90'],
            ['name' => 'Turkmenistan', 'code' => 'TKM', 'country_code' => '+993'],
            ['name' => 'Turks and Caicos Islands', 'code' => 'TCA', 'country_code' => '+1 649'],
            ['name' => 'Tuvalu', 'code' => 'TUV', 'country_code' => '+688'],
            ['name' => 'Uganda', 'code' => 'UGA', 'country_code' => '+256'],
            ['name' => 'Ukraine', 'code' => 'UKR', 'country_code' => '+380'],
            ['name' => 'United Arab Emirates', 'code' => 'ARE', 'country_code' => '+971'],
            ['name' => 'United Kingdom', 'code' => 'GBR', 'country_code' => '+44'],
            ['name' => 'United States', 'code' => 'USA', 'country_code' => '+1'],
            ['name' => 'Uruguay', 'code' => 'URY', 'country_code' => '+598'],
            ['name' => 'Uzbekistan', 'code' => 'UZB', 'country_code' => '+998'],
            ['name' => 'Vanuatu', 'code' => 'VUT', 'country_code' => '+678'],
            ['name' => 'Venezuela', 'code' => 'VEN', 'country_code' => '+58'],
            ['name' => 'Viet Nam', 'code' => 'VNM', 'country_code' => '+84'],
            ['name' => 'Virgin Islands, British', 'code' => 'VGB', 'country_code' => '+1'],
            ['name' => 'Virgin Islands, U.s.', 'code' => 'VIR', 'country_code' => '+1'],
            ['name' => 'Wallis and Futuna', 'code' => 'WLF', 'country_code' => '+681'],
            ['name' => 'Western Sahara', 'code' => 'ESH', 'country_code' => '+212'],
            ['name' => 'Yemen', 'code' => 'YEM', 'country_code' => '+967'],
            ['name' => 'Zambia', 'code' => 'ZMB', 'country_code' => '+260'],
            ['name' => 'Zimbabwe', 'code' => 'ZWE', 'country_code' => '+263'],
        ]);
    }
}