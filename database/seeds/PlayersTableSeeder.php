<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    $param = [
            0=>[  
                'id'=> 1,
                'name'=> '斎藤　佑樹',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_1.jpg',
            ],
            1=>[
                'id'=> 2,
                'name'=> '生田目　翼',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_13.jpg',
            ],
            2=>[  
                'id'=> 3,
                'name'=> '加藤 貴之',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_14.jpg',
            ],
            3=>[ 
                'id'=> 4,
                'name'=> '上沢 直之',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_15.jpg',
            ],
            4=>[  
                'id'=> 5,
                'name'=> '伊藤　大海',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_17.jpg',
            ],
            5=>[  
                'id'=> 6,
                'name'=> '吉田　輝星',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_18.jpg',
            ],
            6=>[  
                'id'=> 7,
                'name'=> '金子　弌大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_19.jpg',
            ] ,
            7=>[ 
                'id'=> 8,
                'name'=> '上原　健太',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_20.jpg',
            ],
            8=>[  
                'id'=> 9,
                'name'=> '宮西　尚生',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_25.jpg',
            ],
            9=>[  
                'id'=> 10,
                'name'=> '河野　竜生',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_28.jpg',
            ],
            10=>[ 
                'id'=> 11,
                'name'=> '井口　和朋',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_29.jpg',
            ],
            11=>[ 
                'id'=> 12,
                'name'=> '村田　透',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_31.jpg',
            ],
            12=>[  
                'id'=> 13,
                'name'=> '立野　和明',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_33.jpg',
            ],
            13=>[ 
                'id'=> 14,
                'name'=> '堀　瑞輝',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_34.jpg',
            ], 
            14=>[  
                'id'=> 15,
                'name'=> '西村　天裕',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_35.jpg',
            ],
            15=>[ 
                'id'=> 16,
                'name'=> 'バーヘイゲン',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_36.jpg',
            ],
            16=>[ 
                'id'=> 17,
                'name'=> '柿木　蓮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_37.jpg',
            ],
            17=>[ 
                'id'=> 18,
                'name'=> '秋吉　亮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_39.jpg',
            ],
            18=>[  
                'id'=> 19,
                'name'=>  '福田　俊',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_40.jpg',
            ],
            19=>[  
                'id'=> 20,
                'name'=>  'B.ロドリゲス',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_41.jpg',
            ], 
            20=>[  
                'id'=> 21,
                'name'=> '長谷川　凌汰',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_43.jpg',
            ],
            21=>[  
                'id'=> 22,
                'name'=> 'アーリン',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_44.jpg',
            ],
            22=>[ 
                'id'=> 23,
                'name'=> '田中　瑛斗',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_46.jpg',
            ],
            23=>[  
                'id'=> 24,
                'name'=> '鈴木　健矢',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_47.jpg',
            ],
            24=>[ 
                'id'=> 25,
                'name'=> '石川　直也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_51.jpg',
            ],
            25=>[ 
                'id'=> 26,
                'name'=> '池田　隆英',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_52.jpg',
            ],
            26=>[  
                'id'=> 27,
                'name'=> '玉井　大翔',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_54.jpg',
            ],
            27=>[  
                'id'=> 28,
                'name'=> '杉浦　稔大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_57.jpg',
            ],
            28=>[ 
                'id'=> 29,
                'name'=> '谷川　昌希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_58.jpg'
            ],
            29=>[ 
                'id'=> 30,
                'name'=> '根本　悠楓',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_59.jpg'
            ],
            30=>[  
                'id'=> 31,
                'name'=> '望月　大希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_62.jpg',
            ],
            31=>[ 
                'id'=> 32,
                'name'=> '北浦　竜次',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_63.jpg',
            ],
            32=>[  
                'id'=> 33,
                'name'=> '松本　遼大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_114.jpg',
            ],
            33=>[ 
                'id'=> 34,
                'name'=> '齋藤　伸治',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_115.jpg',
            ],
            34=>[ 
                'id'=> 35,
                'name'=> '高山　優希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_148.jpg',
            ],
            35=>[ 
                'id'=> 36,
                'name'=> '鈴木　遼太郎',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_150.jpg',
            ],
            36=>[  
                'id'=> 37,
                'name'=> '姫野　優也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_161.jpg',
            ],
            37=>[  
                'id'=> 38,
                'name'=> '杉谷　拳士',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_2.jpg'
            ],
            38=>[ 
                'id'=> 39,
                'name'=> '王　柏融',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_3.jpg',
            ],
            39=>[  
                'id'=> 40,
                'name'=> '谷口　雄也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_4.jpg',
            ],
            40=>[ 
                'id'=> 41,
                'name'=> '大田　泰示',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_5.jpg',
            ],
            41=>[  
                'id'=> 42,
                'name'=> '西川　遥輝',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_7.jpg',
            ],
            42=>[  
                'id'=> 43,
                'name'=> '近藤　健介',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_8.jpg',
            ],
            43=>[ 
                'id'=> 44,
                'name'=> '中島　卓也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_9.jpg',
            ],
            44=>[  
                'id'=> 45,
                'name'=> '清水　優心',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_10.jpg',
            ],
            45=>[  
                'id'=> 46,
                'name'=> '松本　剛',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_12.jpg',
            ],
            46=>[  
                'id'=> 47,
                'name'=> '清宮　幸太郎',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_21.jpg',
            ],
            47=>[  
                'id'=> 48,
                'name'=> '鶴岡　慎也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_22.jpg',
            ],
            48=>[  
                'id'=> 49,
                'name'=> '渡邉　諒',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_23.jpg',
            ],
            49=>[  
                'id'=> 50,
                'name'=>'野村　祐希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_24.jpg',
            ],
            50=>[  
                'id'=> 51,
                'name'=> '淺間　大基',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_26.jpg',
            ],
            51=>[  
                'id'=> 52,
                'name'=> '古川　裕大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_27.jpg',
            ],
            52=>[  
                'id'=> 53,
                'name'=> '宇佐見　真吾',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_30.jpg',
            ],
            53=>[  
                'id'=> 54,
                'name'=> '谷内　亮太',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_32.jpg',
            ],
            54=>[  
                'id'=> 55,
                'name'=> '石井　一成',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_38.jpg',
            ],
            55=>[ 
                'id'=> 56,
                'name'=> '木村　文紀',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_45.jpg',
            ],
            56=>[  
                'id'=> 57,
                'name'=> '上野　響平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_48.jpg',
            ],
            57=>[  
                'id'=> 58,
                'name'=> '佐藤　龍世',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_49.jpg',
            ],
            58=>[  
                'id'=> 59,
                'name'=> '五十幡　亮汰',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_50.jpg',
            ],
            59=>[ 
                'id'=> 60,
                'name'=> 'R.ロドリゲス',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_53.jpg',
            ],
            60=>[  
                'id'=> 61,
                'name'=> '難波　侑平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_55.jpg',
            ],
            61=>[  
                'id'=> 62,
                'name'=> '細川　凌平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_56.jpg',
            ],
            62=>[ 
                'id'=>63,
                'name'=> '郡　拓也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_60.jpg'
            ],
            63=>[  
                'id'=> 64,
                'name'=> '今川　優馬',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_61.jpg',
            ],
            64=>[  
                'id'=> 65,
                'name'=> '田宮　裕涼',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_64.jpg',
            ],
            65=>[  
                'id'=> 66,
                'name'=> '梅林　優貴',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_65.jpg',
            ],
            66=>[  
                'id'=> 67,
                'name'=> '万波　中正',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_66.jpg',
            ],
            67=>[  
                'id'=> 68,
                'name'=> '片岡　奨人',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_67.jpg',
            ],
            68=>[  
                'id'=> 69,
                'name'=> '石川　亮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_68.jpg',
            ],
            69=>[  
                'id'=> 70,
                'name'=> '宮田　輝星',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_69.jpg',
            ],
            70=>[  
                'id'=> 71,
                'name'=> '今井　順之助',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_70.jpg',
            ],
            71=>[  
                'id'=> 72,
                'name'=> '髙濱　祐仁',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_91.jpg',
            ],
            72=>[  
                'id'=> 73,
                'name'=> '樋口　龍之介',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_93.jpg',
            ],
            73=>[  
                'id'=> 74,
                'name'=> '海老原　一佳',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_144.jpg',
            ],
        
        ];
        DB::table('players')->insert($param);
    }
}
