<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            ['school_id' => '301',
            'auth_key' => '7010345281471955'],
            ['school_id' => '201',
            'auth_key' => '7694913022541119'],
            ['school_id' => '302',
            'auth_key' => '1649052186845576'],
            ['school_id' => '101',
            'auth_key' => '3224511849370961'],
            ['school_id' => '303',
            'auth_key' => '6738230094270967'],
            ['school_id' => '304',
            'auth_key' => '3397018246487349'],
            ['school_id' => '202',
            'auth_key' => '6922631994313754'],
            ['school_id' => '102',
            'auth_key' => '3043985518313041'],
            ['school_id' => '305',
            'auth_key' => '3959652496643963'],
            ['school_id' => '203',
            'auth_key' => '0701188916275624'],
            ['school_id' => '306',
            'auth_key' => '6375846713689364'],
            ['school_id' => '307',
            'auth_key' => '3675378504788677'],
            ['school_id' => '308',
            'auth_key' => '8414286487675835'],
            ['school_id' => '204',
            'auth_key' => '9406667467173681'],
            ['school_id' => '309',
            'auth_key' => '9377044638054983'],
            ['school_id' => '310',
            'auth_key' => '6061799693871765'],
            ['school_id' => '311',
            'auth_key' => '1730079229142130'],
            ['school_id' => '103',
            'auth_key' => '2030084140925089'],
            ['school_id' => '312',
            'auth_key' => '4031419179948366'],
            ['school_id' => '313',
            'auth_key' => '7230952751090509'],
            ['school_id' => '104',
            'auth_key' => '8740595849540089'],
            ['school_id' => '105',
            'auth_key' => '5530727748918321'],
            ['school_id' => '106',
            'auth_key' => '5078077927369027'],
            ['school_id' => '107',
            'auth_key' => '2576904504627526'],
            ['school_id' => '108',
            'auth_key' => '2705168609859337'],
            ['school_id' => '109',
            'auth_key' => '0732381863812040'],
            ['school_id' => '110',
            'auth_key' => '6062703731675823'],
            ['school_id' => '111',
            'auth_key' => '6666315877086733'],
            ['school_id' => '112',
            'auth_key' => '6873677889784177'],
            ['school_id' => '113',
            'auth_key' => '1388847544940264'],
            ['school_id' => '114',
            'auth_key' => '0583675447626352'],
            ['school_id' => '115',
            'auth_key' => '0368740313998561'],
            ['school_id' => '116',
            'auth_key' => '6804664449183023'],
            ['school_id' => '117',
            'auth_key' => '3396915518370825'],
            ['school_id' => '205',
            'auth_key' => '3334865230413471'],
            ['school_id' => '118',
            'auth_key' => '4440242975862023'],
            ['school_id' => '119',
            'auth_key' => '7414176001035496'],
            ['school_id' => '314',
            'auth_key' => '8305455758072822'],
            ['school_id' => '315',
            'auth_key' => '4955822758586163'],
            ['school_id' => '120',
            'auth_key' => '0006477143878841'],
            ['school_id' => '206',
            'auth_key' => '4913257636301151'],
            ['school_id' => '316',
            'auth_key' => '5312191427476234'],
            ['school_id' => '121',
            'auth_key' => '9705152332068968'],
            ['school_id' => '317',
            'auth_key' => '6365273976095873'],
            ['school_id' => '318',
            'auth_key' => '2019301588693464'],
            ['school_id' => '319',
            'auth_key' => '4253377350071875'],
            ['school_id' => '320',
            'auth_key' => '0266030880983718']
        ];

        DB::table('welcome')->insert($data); 
    }
}
