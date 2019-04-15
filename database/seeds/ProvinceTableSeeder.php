<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('province')->delete();
        
        \DB::table('province')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'آذربایجان شرقی',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'آذربایجان غربی',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'اردبیل',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'اصفهان',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'البرز',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ایلام',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'بوشهر',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'تهران',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'چهارمحال وبختیاری',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'خراسان جنوبی',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'خراسان رضوی',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'خراسان شمالی',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'خوزستان',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'زنجان',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'سمنان',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'سیستان وبلوچستان',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'فارس',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'قزوین',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'قم',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'کردستان',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'کرمان',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'کرمانشاه',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'کهگیلویه وبویراحمد',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'گلستان',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'گیلان',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'لرستان',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'مازندران',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'مرکزی',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'هرمزگان',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'همدان',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'یزد',
            ),
        ));
        
        
    }
}