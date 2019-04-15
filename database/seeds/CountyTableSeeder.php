<?php

use Illuminate\Database\Seeder;

class CountyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('county')->delete();
        
        \DB::table('county')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'آذرشهر',
                'province_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'اسکو',
                'province_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'اهر',
                'province_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'بستان آباد',
                'province_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'بناب',
                'province_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'تبریز',
                'province_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'جلفا',
                'province_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'چاراویماق',
                'province_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'خداآفرین',
                'province_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'سراب',
                'province_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'شبستر',
                'province_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'عجب شیر',
                'province_id' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'کلیبر',
                'province_id' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'مراغه',
                'province_id' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'مرند',
                'province_id' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'ملکان',
                'province_id' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'میانه',
                'province_id' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'ورزقان',
                'province_id' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'هریس',
                'province_id' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'هشترود',
                'province_id' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'ارومیه',
                'province_id' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'اشنویه',
                'province_id' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'بوکان',
                'province_id' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'پلدشت',
                'province_id' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'پیرانشهر',
                'province_id' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'تکاب',
                'province_id' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'چالدران',
                'province_id' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'چایپاره',
                'province_id' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'خوی',
                'province_id' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'سردشت',
                'province_id' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'سلماس',
                'province_id' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'شاهین دژ',
                'province_id' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'شوط',
                'province_id' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'ماکو',
                'province_id' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'مهاباد',
                'province_id' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'میاندوآب',
                'province_id' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'نقده',
                'province_id' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'اردبیل',
                'province_id' => 3,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'بیله سوار',
                'province_id' => 3,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'پارس آباد',
                'province_id' => 3,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'خلخال',
                'province_id' => 3,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'سرعین',
                'province_id' => 3,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'کوثر',
                'province_id' => 3,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'گرمی',
                'province_id' => 3,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'مشگین شهر',
                'province_id' => 3,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'نمین',
                'province_id' => 3,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'نیر',
                'province_id' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'آران وبیدگل',
                'province_id' => 4,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'اردستان',
                'province_id' => 4,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'اصفهان',
                'province_id' => 4,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'برخوار',
                'province_id' => 4,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'بو یین و میاندشت',
                'province_id' => 4,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'تیران وکرون',
                'province_id' => 4,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'چادگان',
                'province_id' => 4,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'خمینی شهر',
                'province_id' => 4,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'خوانسار',
                'province_id' => 4,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'خور و بیابانک',
                'province_id' => 4,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'دهاقان',
                'province_id' => 4,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'سمیرم',
                'province_id' => 4,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'شاهین شهرومیمه',
                'province_id' => 4,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'شهرضا',
                'province_id' => 4,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'فریدن',
                'province_id' => 4,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'فریدونشهر',
                'province_id' => 4,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'فلاورجان',
                'province_id' => 4,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'کاشان',
                'province_id' => 4,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'گلپایگان',
                'province_id' => 4,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'لنجان',
                'province_id' => 4,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'مبارکه',
                'province_id' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'نایین',
                'province_id' => 4,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'نجف آباد',
                'province_id' => 4,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'نطنز',
                'province_id' => 4,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'اشتهارد',
                'province_id' => 5,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'ساوجبلاغ',
                'province_id' => 5,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'طالقان',
                'province_id' => 5,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'فردیس',
                'province_id' => 5,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'کرج',
                'province_id' => 5,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'نظرآباد',
                'province_id' => 5,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'آبدانان',
                'province_id' => 6,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'ایلام',
                'province_id' => 6,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'ایوان',
                'province_id' => 6,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'بدره',
                'province_id' => 6,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'چرداول',
                'province_id' => 6,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'دره شهر',
                'province_id' => 6,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'دهلران',
                'province_id' => 6,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'سیروان',
                'province_id' => 6,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'ملکشاهی',
                'province_id' => 6,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'مهران',
                'province_id' => 6,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'بوشهر',
                'province_id' => 7,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'تنگستان',
                'province_id' => 7,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'جم',
                'province_id' => 7,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'دشتستان',
                'province_id' => 7,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'دشتی',
                'province_id' => 7,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'دیر',
                'province_id' => 7,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'دیلم',
                'province_id' => 7,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'عسلویه',
                'province_id' => 7,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'کنگان',
                'province_id' => 7,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'گناوه',
                'province_id' => 7,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'اسلامشهر',
                'province_id' => 8,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'بهارستان',
                'province_id' => 8,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'پاکدشت',
                'province_id' => 8,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'پردیس',
                'province_id' => 8,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'پیشوا',
                'province_id' => 8,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'تهران',
                'province_id' => 8,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'دماوند',
                'province_id' => 8,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'رباطکریم',
                'province_id' => 8,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'ری',
                'province_id' => 8,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'شمیرانات',
                'province_id' => 8,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'شهریار',
                'province_id' => 8,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'فیروزکوه',
                'province_id' => 8,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'قدس',
                'province_id' => 8,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'قرچک',
                'province_id' => 8,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'ملارد',
                'province_id' => 8,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'ورامین',
                'province_id' => 8,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'اردل',
                'province_id' => 9,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'بروجن',
                'province_id' => 9,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'بن',
                'province_id' => 9,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'سامان',
                'province_id' => 9,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'شهرکرد',
                'province_id' => 9,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'فارسان',
                'province_id' => 9,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'کوهرنگ',
                'province_id' => 9,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'کیار',
                'province_id' => 9,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'لردگان',
                'province_id' => 9,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'بشرویه',
                'province_id' => 10,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'بیرجند',
                'province_id' => 10,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'خوسف',
                'province_id' => 10,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'درمیان',
                'province_id' => 10,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'زیرکوه',
                'province_id' => 10,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'سرایان',
                'province_id' => 10,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'سربیشه',
                'province_id' => 10,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'طبس',
                'province_id' => 10,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'فردوس',
                'province_id' => 10,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'قاینات',
                'province_id' => 10,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'نهبندان',
                'province_id' => 10,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'باخرز',
                'province_id' => 11,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'بجستان',
                'province_id' => 11,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'بردسکن',
                'province_id' => 11,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'بینالود',
                'province_id' => 11,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'تایباد',
                'province_id' => 11,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'تربت جام',
                'province_id' => 11,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'تربت حیدریه',
                'province_id' => 11,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'جغتای',
                'province_id' => 11,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'جوین',
                'province_id' => 11,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'چناران',
                'province_id' => 11,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'خلیل آباد',
                'province_id' => 11,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'خواف',
                'province_id' => 11,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'خوشاب',
                'province_id' => 11,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'داورزن',
                'province_id' => 11,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'درگز',
                'province_id' => 11,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'رشتخوار',
                'province_id' => 11,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'زاوه',
                'province_id' => 11,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'سبزوار',
                'province_id' => 11,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'سرخس',
                'province_id' => 11,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'فریمان',
                'province_id' => 11,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'فیروزه',
                'province_id' => 11,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'قوچان',
                'province_id' => 11,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'کاشمر',
                'province_id' => 11,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'کلات',
                'province_id' => 11,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'گناباد',
                'province_id' => 11,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'مشهد',
                'province_id' => 11,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'مه ولات',
                'province_id' => 11,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'نیشابور',
                'province_id' => 11,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'اسفراین',
                'province_id' => 12,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'بجنورد',
                'province_id' => 12,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'جاجرم',
                'province_id' => 12,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'راز و جرگلان',
                'province_id' => 12,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'شیروان',
                'province_id' => 12,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'فاروج',
                'province_id' => 12,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'گرمه',
                'province_id' => 12,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'مانه وسملقان',
                'province_id' => 12,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'آبادان',
                'province_id' => 13,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'آغاجاری',
                'province_id' => 13,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'امیدیه',
                'province_id' => 13,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'اندیکا',
                'province_id' => 13,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'اندیمشک',
                'province_id' => 13,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'اهواز',
                'province_id' => 13,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'ایذه',
                'province_id' => 13,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'باغ ملک',
                'province_id' => 13,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'باوی',
                'province_id' => 13,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'بندرماهشهر',
                'province_id' => 13,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'بهبهان',
                'province_id' => 13,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'حمیدیه',
                'province_id' => 13,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'خرمشهر',
                'province_id' => 13,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'دزفول',
                'province_id' => 13,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'دشت آزادگان',
                'province_id' => 13,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'رامشیر',
                'province_id' => 13,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'رامهرمز',
                'province_id' => 13,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'شادگان',
                'province_id' => 13,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'شوش',
                'province_id' => 13,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'شوشتر',
                'province_id' => 13,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'کارون',
                'province_id' => 13,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'گتوند',
                'province_id' => 13,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'لالی',
                'province_id' => 13,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'مسجدسلیمان',
                'province_id' => 13,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'هفتگل',
                'province_id' => 13,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'هندیجان',
                'province_id' => 13,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'هویزه',
                'province_id' => 13,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'ابهر',
                'province_id' => 14,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'ایجرود',
                'province_id' => 14,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'خدابنده',
                'province_id' => 14,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'خرمدره',
                'province_id' => 14,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'زنجان',
                'province_id' => 14,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'سلطانیه',
                'province_id' => 14,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'طارم',
                'province_id' => 14,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'ماهنشان',
                'province_id' => 14,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'آرادان',
                'province_id' => 15,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'دامغان',
                'province_id' => 15,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'سرخه',
                'province_id' => 15,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'سمنان',
                'province_id' => 15,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'شاهرود',
                'province_id' => 15,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'گرمسار',
                'province_id' => 15,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'مهدی شهر',
                'province_id' => 15,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'میامی',
                'province_id' => 15,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'ایرانشهر',
                'province_id' => 16,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'چابهار',
                'province_id' => 16,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'خاش',
                'province_id' => 16,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'دلگان',
                'province_id' => 16,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'زابل',
                'province_id' => 16,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'زاهدان',
                'province_id' => 16,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'زهک',
                'province_id' => 16,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'سراوان',
                'province_id' => 16,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'سرباز',
                'province_id' => 16,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'سیب و سوران',
                'province_id' => 16,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'فنوج',
                'province_id' => 16,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'قصرقند',
                'province_id' => 16,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'کنارک',
                'province_id' => 16,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'مهرستان',
                'province_id' => 16,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'میرجاوه',
                'province_id' => 16,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'نیک شهر',
                'province_id' => 16,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'نیمروز',
                'province_id' => 16,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'هامون',
                'province_id' => 16,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'هیرمند',
                'province_id' => 16,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'آباده',
                'province_id' => 17,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'ارسنجان',
                'province_id' => 17,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'استهبان',
                'province_id' => 17,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'اقلید',
                'province_id' => 17,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'بوانات',
                'province_id' => 17,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'پاسارگاد',
                'province_id' => 17,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'جهرم',
                'province_id' => 17,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'خرامه',
                'province_id' => 17,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'خرم بید',
                'province_id' => 17,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'خنج',
                'province_id' => 17,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'داراب',
                'province_id' => 17,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'رستم',
                'province_id' => 17,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'زرین دشت',
                'province_id' => 17,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'سپیدان',
                'province_id' => 17,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'سروستان',
                'province_id' => 17,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'شیراز',
                'province_id' => 17,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'فراشبند',
                'province_id' => 17,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'فسا',
                'province_id' => 17,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'فیروزآباد',
                'province_id' => 17,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'قیروکارزین',
                'province_id' => 17,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'کازرون',
                'province_id' => 17,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'کوار',
                'province_id' => 17,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'گراش',
                'province_id' => 17,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'لارستان',
                'province_id' => 17,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'لامرد',
                'province_id' => 17,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'مرودشت',
                'province_id' => 17,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'ممسنی',
                'province_id' => 17,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'مهر',
                'province_id' => 17,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'نی ریز',
                'province_id' => 17,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'آبیک',
                'province_id' => 18,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'آوج',
                'province_id' => 18,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'البرز',
                'province_id' => 18,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'بویین زهرا',
                'province_id' => 18,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'تاکستان',
                'province_id' => 18,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'قزوین',
                'province_id' => 18,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'قم',
                'province_id' => 19,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'بانه',
                'province_id' => 20,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'بیجار',
                'province_id' => 20,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'دهگلان',
                'province_id' => 20,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'دیواندره',
                'province_id' => 20,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'سروآباد',
                'province_id' => 20,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'سقز',
                'province_id' => 20,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'سنندج',
                'province_id' => 20,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'قروه',
                'province_id' => 20,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'کامیاران',
                'province_id' => 20,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'مریوان',
                'province_id' => 20,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'ارزوییه',
                'province_id' => 21,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'انار',
                'province_id' => 21,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'بافت',
                'province_id' => 21,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'بردسیر',
                'province_id' => 21,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'بم',
                'province_id' => 21,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'جیرفت',
                'province_id' => 21,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'رابر',
                'province_id' => 21,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'راور',
                'province_id' => 21,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'رفسنجان',
                'province_id' => 21,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'رودبارجنوب',
                'province_id' => 21,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'ریگان',
                'province_id' => 21,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'زرند',
                'province_id' => 21,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'سیرجان',
                'province_id' => 21,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'شهربابک',
                'province_id' => 21,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'عنبرآباد',
                'province_id' => 21,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'فاریاب',
                'province_id' => 21,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'فهرج',
                'province_id' => 21,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'قلعه گنج',
                'province_id' => 21,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'کرمان',
                'province_id' => 21,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'کوهبنان',
                'province_id' => 21,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'کهنوج',
                'province_id' => 21,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'منوجان',
                'province_id' => 21,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'نرماشیر',
                'province_id' => 21,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'اسلام آبادغرب',
                'province_id' => 22,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'پاوه',
                'province_id' => 22,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'ثلاث باباجانی',
                'province_id' => 22,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'جوانرود',
                'province_id' => 22,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'دالاهو',
                'province_id' => 22,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'روانسر',
                'province_id' => 22,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'سرپل ذهاب',
                'province_id' => 22,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'سنقر',
                'province_id' => 22,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'صحنه',
                'province_id' => 22,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'قصرشیرین',
                'province_id' => 22,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'کرمانشاه',
                'province_id' => 22,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'کنگاور',
                'province_id' => 22,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'گیلانغرب',
                'province_id' => 22,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'هرسین',
                'province_id' => 22,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'باشت',
                'province_id' => 23,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'بویراحمد',
                'province_id' => 23,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'بهمیی',
                'province_id' => 23,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'چرام',
                'province_id' => 23,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'دنا',
                'province_id' => 23,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'کهگیلویه',
                'province_id' => 23,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'گچساران',
                'province_id' => 23,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'لنده',
                'province_id' => 23,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'آزادشهر',
                'province_id' => 24,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'آق قلا',
                'province_id' => 24,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'بندرگز',
                'province_id' => 24,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'ترکمن',
                'province_id' => 24,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'رامیان',
                'province_id' => 24,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'علی آباد',
                'province_id' => 24,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'کردکوی',
                'province_id' => 24,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'کلاله',
                'province_id' => 24,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'گالیکش',
                'province_id' => 24,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'گرگان',
                'province_id' => 24,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'گمیشان',
                'province_id' => 24,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'گنبدکاووس',
                'province_id' => 24,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'مراوه تپه',
                'province_id' => 24,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'مینودشت',
                'province_id' => 24,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'آستارا',
                'province_id' => 25,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'آستانه اشرفیه',
                'province_id' => 25,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'املش',
                'province_id' => 25,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'بندرانزلی',
                'province_id' => 25,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'رشت',
                'province_id' => 25,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'رضوانشهر',
                'province_id' => 25,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'رودبار',
                'province_id' => 25,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'رودسر',
                'province_id' => 25,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'سیاهکل',
                'province_id' => 25,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'شفت',
                'province_id' => 25,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'صومعه سرا',
                'province_id' => 25,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'طوالش',
                'province_id' => 25,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'فومن',
                'province_id' => 25,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'لاهیجان',
                'province_id' => 25,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'لنگرود',
                'province_id' => 25,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'ماسال',
                'province_id' => 25,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'ازنا',
                'province_id' => 26,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'الیگودرز',
                'province_id' => 26,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'بروجرد',
                'province_id' => 26,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'پلدختر',
                'province_id' => 26,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'خرم آباد',
                'province_id' => 26,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'دلفان',
                'province_id' => 26,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'دورود',
                'province_id' => 26,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'دوره',
                'province_id' => 26,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'رومشکان',
                'province_id' => 26,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'سلسله',
                'province_id' => 26,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'کوهدشت',
                'province_id' => 26,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'آمل',
                'province_id' => 27,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'بابل',
                'province_id' => 27,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'بابلسر',
                'province_id' => 27,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'بهشهر',
                'province_id' => 27,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'تنکابن',
                'province_id' => 27,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'جویبار',
                'province_id' => 27,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'چالوس',
                'province_id' => 27,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'رامسر',
                'province_id' => 27,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'ساری',
                'province_id' => 27,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'سوادکوه',
                'province_id' => 27,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'سوادکوه شمالی',
                'province_id' => 27,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'سیمرغ',
                'province_id' => 27,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'عباس آباد',
                'province_id' => 27,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'فریدونکنار',
                'province_id' => 27,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'قایم شهر',
                'province_id' => 27,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'کلاردشت',
                'province_id' => 27,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'گلوگاه',
                'province_id' => 27,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'محمودآباد',
                'province_id' => 27,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'میاندورود',
                'province_id' => 27,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'نکا',
                'province_id' => 27,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'نور',
                'province_id' => 27,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'نوشهر',
                'province_id' => 27,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'آشتیان',
                'province_id' => 28,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'اراک',
                'province_id' => 28,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'تفرش',
                'province_id' => 28,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'خمین',
                'province_id' => 28,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'خنداب',
                'province_id' => 28,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'دلیجان',
                'province_id' => 28,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'زرندیه',
                'province_id' => 28,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'ساوه',
                'province_id' => 28,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'شازند',
                'province_id' => 28,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'فراهان',
                'province_id' => 28,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'کمیجان',
                'province_id' => 28,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'محلات',
                'province_id' => 28,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'ابوموسی',
                'province_id' => 29,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'بستک',
                'province_id' => 29,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'بشاگرد',
                'province_id' => 29,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'بندرعباس',
                'province_id' => 29,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'بندرلنگه',
                'province_id' => 29,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'پارسیان',
                'province_id' => 29,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'جاسک',
                'province_id' => 29,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'حاجی اباد',
                'province_id' => 29,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'خمیر',
                'province_id' => 29,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'رودان',
                'province_id' => 29,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'سیریک',
                'province_id' => 29,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'قشم',
                'province_id' => 29,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'میناب',
                'province_id' => 29,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'اسدآباد',
                'province_id' => 30,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'بهار',
                'province_id' => 30,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'تویسرکان',
                'province_id' => 30,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'رزن',
                'province_id' => 30,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'فامنین',
                'province_id' => 30,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'کبودرآهنگ',
                'province_id' => 30,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'ملایر',
                'province_id' => 30,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'نهاوند',
                'province_id' => 30,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'همدان',
                'province_id' => 30,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'ابرکوه',
                'province_id' => 31,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'اردکان',
                'province_id' => 31,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'اشکذر',
                'province_id' => 31,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'بافق',
                'province_id' => 31,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'بهاباد',
                'province_id' => 31,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'تفت',
                'province_id' => 31,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'خاتم',
                'province_id' => 31,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'مهریز',
                'province_id' => 31,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'میبد',
                'province_id' => 31,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'یزد',
                'province_id' => 31,
            ),
        ));
        
        
    }
}