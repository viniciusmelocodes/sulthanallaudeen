<?php

use Illuminate\Database\Seeder;

class BlogTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_tag')->delete();
        
        \DB::table('blog_tag')->insert(array (
            0 => 
            array (
                'id' => 2,
                'blog_id' => 1,
                'tag_id' => 3,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 11:27:58',
                'updated_at' => '2015-09-30 11:27:58',
            ),
            1 => 
            array (
                'id' => 7,
                'blog_id' => 6,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 13:03:07',
                'updated_at' => '2015-09-30 13:03:07',
            ),
            2 => 
            array (
                'id' => 13,
                'blog_id' => 11,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 13:11:21',
                'updated_at' => '2015-09-30 13:11:21',
            ),
            3 => 
            array (
                'id' => 14,
                'blog_id' => 11,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 13:11:21',
                'updated_at' => '2015-09-30 13:11:21',
            ),
            4 => 
            array (
                'id' => 17,
                'blog_id' => 13,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 13:26:11',
                'updated_at' => '2015-09-30 13:26:11',
            ),
            5 => 
            array (
                'id' => 18,
                'blog_id' => 13,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 13:26:11',
                'updated_at' => '2015-09-30 13:26:11',
            ),
            6 => 
            array (
                'id' => 26,
                'blog_id' => 18,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 14:09:35',
                'updated_at' => '2015-09-30 14:09:35',
            ),
            7 => 
            array (
                'id' => 27,
                'blog_id' => 19,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 14:18:57',
                'updated_at' => '2015-09-30 14:18:57',
            ),
            8 => 
            array (
                'id' => 28,
                'blog_id' => 20,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 14:20:41',
                'updated_at' => '2015-09-30 14:20:41',
            ),
            9 => 
            array (
                'id' => 29,
                'blog_id' => 20,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 14:20:41',
                'updated_at' => '2015-09-30 14:20:41',
            ),
            10 => 
            array (
                'id' => 30,
                'blog_id' => 20,
                'tag_id' => 7,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 14:20:41',
                'updated_at' => '2015-09-30 14:20:41',
            ),
            11 => 
            array (
                'id' => 61,
                'blog_id' => 16,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 15:53:46',
                'updated_at' => '2015-09-30 15:53:46',
            ),
            12 => 
            array (
                'id' => 62,
                'blog_id' => 16,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 15:53:46',
                'updated_at' => '2015-09-30 15:53:46',
            ),
            13 => 
            array (
                'id' => 65,
                'blog_id' => 12,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 15:55:07',
                'updated_at' => '2015-09-30 15:55:07',
            ),
            14 => 
            array (
                'id' => 66,
                'blog_id' => 12,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-09-30 15:55:07',
                'updated_at' => '2015-09-30 15:55:07',
            ),
            15 => 
            array (
                'id' => 80,
                'blog_id' => 8,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:54:52',
                'updated_at' => '2015-10-05 22:54:52',
            ),
            16 => 
            array (
                'id' => 81,
                'blog_id' => 8,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:54:52',
                'updated_at' => '2015-10-05 22:54:52',
            ),
            17 => 
            array (
                'id' => 82,
                'blog_id' => 8,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:54:52',
                'updated_at' => '2015-10-05 22:54:52',
            ),
            18 => 
            array (
                'id' => 83,
                'blog_id' => 9,
                'tag_id' => 3,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:55:03',
                'updated_at' => '2015-10-05 22:55:03',
            ),
            19 => 
            array (
                'id' => 84,
                'blog_id' => 9,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:55:03',
                'updated_at' => '2015-10-05 22:55:03',
            ),
            20 => 
            array (
                'id' => 91,
                'blog_id' => 15,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:58:11',
                'updated_at' => '2015-10-05 22:58:11',
            ),
            21 => 
            array (
                'id' => 92,
                'blog_id' => 15,
                'tag_id' => 3,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:58:11',
                'updated_at' => '2015-10-05 22:58:11',
            ),
            22 => 
            array (
                'id' => 93,
                'blog_id' => 15,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 22:58:11',
                'updated_at' => '2015-10-05 22:58:11',
            ),
            23 => 
            array (
                'id' => 114,
                'blog_id' => 28,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:04:09',
                'updated_at' => '2015-10-05 23:04:09',
            ),
            24 => 
            array (
                'id' => 115,
                'blog_id' => 26,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:05:07',
                'updated_at' => '2015-10-05 23:05:07',
            ),
            25 => 
            array (
                'id' => 116,
                'blog_id' => 26,
                'tag_id' => 3,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:05:07',
                'updated_at' => '2015-10-05 23:05:07',
            ),
            26 => 
            array (
                'id' => 117,
                'blog_id' => 26,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:05:07',
                'updated_at' => '2015-10-05 23:05:07',
            ),
            27 => 
            array (
                'id' => 118,
                'blog_id' => 26,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:05:07',
                'updated_at' => '2015-10-05 23:05:07',
            ),
            28 => 
            array (
                'id' => 126,
                'blog_id' => 2,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:16:44',
                'updated_at' => '2015-10-05 23:16:44',
            ),
            29 => 
            array (
                'id' => 127,
                'blog_id' => 2,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:16:44',
                'updated_at' => '2015-10-05 23:16:44',
            ),
            30 => 
            array (
                'id' => 132,
                'blog_id' => 5,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-05 23:32:27',
                'updated_at' => '2015-10-05 23:32:27',
            ),
            31 => 
            array (
                'id' => 135,
                'blog_id' => 30,
                'tag_id' => 14,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-07 22:08:59',
                'updated_at' => '2015-10-07 22:08:59',
            ),
            32 => 
            array (
                'id' => 136,
                'blog_id' => 30,
                'tag_id' => 15,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-07 22:08:59',
                'updated_at' => '2015-10-07 22:08:59',
            ),
            33 => 
            array (
                'id' => 137,
                'blog_id' => 29,
                'tag_id' => 15,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-07 22:10:23',
                'updated_at' => '2015-10-07 22:10:23',
            ),
            34 => 
            array (
                'id' => 138,
                'blog_id' => 27,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-07 22:14:02',
                'updated_at' => '2015-10-07 22:14:02',
            ),
            35 => 
            array (
                'id' => 139,
                'blog_id' => 27,
                'tag_id' => 16,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-07 22:14:02',
                'updated_at' => '2015-10-07 22:14:02',
            ),
            36 => 
            array (
                'id' => 140,
                'blog_id' => 10,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:05:56',
                'updated_at' => '2015-10-16 10:05:56',
            ),
            37 => 
            array (
                'id' => 141,
                'blog_id' => 10,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:05:56',
                'updated_at' => '2015-10-16 10:05:56',
            ),
            38 => 
            array (
                'id' => 142,
                'blog_id' => 7,
                'tag_id' => 12,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:06:11',
                'updated_at' => '2015-10-16 10:06:11',
            ),
            39 => 
            array (
                'id' => 143,
                'blog_id' => 7,
                'tag_id' => 13,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:06:11',
                'updated_at' => '2015-10-16 10:06:11',
            ),
            40 => 
            array (
                'id' => 144,
                'blog_id' => 4,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:06:55',
                'updated_at' => '2015-10-16 10:06:55',
            ),
            41 => 
            array (
                'id' => 145,
                'blog_id' => 3,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:07:58',
                'updated_at' => '2015-10-16 10:07:58',
            ),
            42 => 
            array (
                'id' => 146,
                'blog_id' => 3,
                'tag_id' => 10,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:07:58',
                'updated_at' => '2015-10-16 10:07:58',
            ),
            43 => 
            array (
                'id' => 147,
                'blog_id' => 3,
                'tag_id' => 15,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:07:58',
                'updated_at' => '2015-10-16 10:07:58',
            ),
            44 => 
            array (
                'id' => 148,
                'blog_id' => 14,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:15',
                'updated_at' => '2015-10-16 10:09:15',
            ),
            45 => 
            array (
                'id' => 149,
                'blog_id' => 14,
                'tag_id' => 10,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:15',
                'updated_at' => '2015-10-16 10:09:15',
            ),
            46 => 
            array (
                'id' => 150,
                'blog_id' => 17,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:36',
                'updated_at' => '2015-10-16 10:09:36',
            ),
            47 => 
            array (
                'id' => 151,
                'blog_id' => 17,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:36',
                'updated_at' => '2015-10-16 10:09:36',
            ),
            48 => 
            array (
                'id' => 152,
                'blog_id' => 17,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:36',
                'updated_at' => '2015-10-16 10:09:36',
            ),
            49 => 
            array (
                'id' => 153,
                'blog_id' => 17,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:09:36',
                'updated_at' => '2015-10-16 10:09:36',
            ),
            50 => 
            array (
                'id' => 154,
                'blog_id' => 21,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:04',
                'updated_at' => '2015-10-16 10:10:04',
            ),
            51 => 
            array (
                'id' => 155,
                'blog_id' => 21,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:04',
                'updated_at' => '2015-10-16 10:10:04',
            ),
            52 => 
            array (
                'id' => 156,
                'blog_id' => 22,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:13',
                'updated_at' => '2015-10-16 10:10:13',
            ),
            53 => 
            array (
                'id' => 157,
                'blog_id' => 22,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:13',
                'updated_at' => '2015-10-16 10:10:13',
            ),
            54 => 
            array (
                'id' => 158,
                'blog_id' => 23,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:21',
                'updated_at' => '2015-10-16 10:10:21',
            ),
            55 => 
            array (
                'id' => 159,
                'blog_id' => 23,
                'tag_id' => 6,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:21',
                'updated_at' => '2015-10-16 10:10:21',
            ),
            56 => 
            array (
                'id' => 160,
                'blog_id' => 23,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:21',
                'updated_at' => '2015-10-16 10:10:21',
            ),
            57 => 
            array (
                'id' => 161,
                'blog_id' => 24,
                'tag_id' => 3,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:28',
                'updated_at' => '2015-10-16 10:10:28',
            ),
            58 => 
            array (
                'id' => 162,
                'blog_id' => 24,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:28',
                'updated_at' => '2015-10-16 10:10:28',
            ),
            59 => 
            array (
                'id' => 163,
                'blog_id' => 25,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-10-16 10:10:35',
                'updated_at' => '2015-10-16 10:10:35',
            ),
            60 => 
            array (
                'id' => 170,
                'blog_id' => 34,
                'tag_id' => 5,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-03 22:31:31',
                'updated_at' => '2015-11-03 22:31:31',
            ),
            61 => 
            array (
                'id' => 171,
                'blog_id' => 34,
                'tag_id' => 17,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-03 22:31:31',
                'updated_at' => '2015-11-03 22:31:31',
            ),
            62 => 
            array (
                'id' => 175,
                'blog_id' => 35,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 13:33:53',
                'updated_at' => '2015-11-05 13:33:53',
            ),
            63 => 
            array (
                'id' => 176,
                'blog_id' => 35,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 13:33:53',
                'updated_at' => '2015-11-05 13:33:53',
            ),
            64 => 
            array (
                'id' => 177,
                'blog_id' => 35,
                'tag_id' => 18,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 13:33:53',
                'updated_at' => '2015-11-05 13:33:53',
            ),
            65 => 
            array (
                'id' => 180,
                'blog_id' => 31,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 15:04:32',
                'updated_at' => '2015-11-05 15:04:32',
            ),
            66 => 
            array (
                'id' => 181,
                'blog_id' => 31,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 15:04:32',
                'updated_at' => '2015-11-05 15:04:32',
            ),
            67 => 
            array (
                'id' => 182,
                'blog_id' => 32,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 15:04:55',
                'updated_at' => '2015-11-05 15:04:55',
            ),
            68 => 
            array (
                'id' => 184,
                'blog_id' => 33,
                'tag_id' => 9,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-05 15:05:19',
                'updated_at' => '2015-11-05 15:05:19',
            ),
            69 => 
            array (
                'id' => 186,
                'blog_id' => 36,
                'tag_id' => 19,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2015-11-13 03:45:18',
                'updated_at' => '2015-11-13 03:45:18',
            ),
            70 => 
            array (
                'id' => 187,
                'blog_id' => 37,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-11 10:40:21',
                'updated_at' => '2016-02-11 10:40:21',
            ),
            71 => 
            array (
                'id' => 188,
                'blog_id' => 37,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-11 10:40:21',
                'updated_at' => '2016-02-11 10:40:21',
            ),
            72 => 
            array (
                'id' => 189,
                'blog_id' => 38,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            73 => 
            array (
                'id' => 190,
                'blog_id' => 38,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            74 => 
            array (
                'id' => 191,
                'blog_id' => 38,
                'tag_id' => 12,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            75 => 
            array (
                'id' => 192,
                'blog_id' => 38,
                'tag_id' => 20,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            76 => 
            array (
                'id' => 193,
                'blog_id' => 38,
                'tag_id' => 21,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            77 => 
            array (
                'id' => 194,
                'blog_id' => 38,
                'tag_id' => 22,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-02-17 09:36:06',
                'updated_at' => '2016-02-17 09:36:06',
            ),
            78 => 
            array (
                'id' => 195,
                'blog_id' => 39,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-03-08 11:58:03',
                'updated_at' => '2016-03-08 11:58:03',
            ),
            79 => 
            array (
                'id' => 196,
                'blog_id' => 39,
                'tag_id' => 2,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-03-08 11:58:03',
                'updated_at' => '2016-03-08 11:58:03',
            ),
            80 => 
            array (
                'id' => 201,
                'blog_id' => 40,
                'tag_id' => 20,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-04-28 12:48:52',
                'updated_at' => '2016-04-28 12:48:52',
            ),
            81 => 
            array (
                'id' => 208,
                'blog_id' => 41,
                'tag_id' => 20,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-04-29 09:22:19',
                'updated_at' => '2016-04-29 09:22:19',
            ),
            82 => 
            array (
                'id' => 209,
                'blog_id' => 41,
                'tag_id' => 23,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-04-29 09:22:19',
                'updated_at' => '2016-04-29 09:22:19',
            ),
            83 => 
            array (
                'id' => 211,
                'blog_id' => 42,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-06-19 12:53:50',
                'updated_at' => '2016-06-19 12:53:50',
            ),
            84 => 
            array (
                'id' => 212,
                'blog_id' => 43,
                'tag_id' => 1,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-06-19 12:56:39',
                'updated_at' => '2016-06-19 12:56:39',
            ),
            85 => 
            array (
                'id' => 213,
                'blog_id' => 44,
                'tag_id' => 4,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-07-21 00:47:19',
                'updated_at' => '2016-07-21 00:47:19',
            ),
            86 => 
            array (
                'id' => 214,
                'blog_id' => 45,
                'tag_id' => 24,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-07-26 11:03:44',
                'updated_at' => '2016-07-26 11:03:44',
            ),
            87 => 
            array (
                'id' => 215,
                'blog_id' => 45,
                'tag_id' => 25,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-07-26 11:03:44',
                'updated_at' => '2016-07-26 11:03:44',
            ),
            88 => 
            array (
                'id' => 216,
                'blog_id' => 46,
                'tag_id' => 24,
                'user_id' => 1,
                'status' => 0,
                'created_at' => '2016-07-26 11:06:57',
                'updated_at' => '2016-07-26 11:06:57',
            ),
        ));
        
        
    }
}