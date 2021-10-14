<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //選手名と画像を保存したい
    public function run(){
    $now = Carbon::now();
    $data = [
            0=>[  
                'name'=> '斎藤　佑樹',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_1.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            1=>[
               
                'name'=> '生田目　翼',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_13.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
             2=>[  
                'name'=> '加藤 貴之',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_14.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            3=>[ 
                'name'=> '上沢 直之',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_15.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            4=>[  
               
                'name'=> '伊藤　大海',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_17.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            5=>[  
              
                'name'=> '吉田　輝星',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_18.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            6=>[  
               
                'name'=> '金子　弌大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_19.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ] ,
            7=>[ 
               
                'name'=> '上原　健太',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_20.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            8=>[  
                'name'=> '宮西　尚生',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_25.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            9=>[  
                'name'=> '河野　竜生',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_28.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            10=>[
                'name'=> '井口　和朋',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_29.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            11=>[ 
                'name'=> '村田　透',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_31.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            12=>[  
                'name'=> '立野　和明',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_33.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            13=>[ 
                'name'=> '堀　瑞輝',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_34.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ], 
            14=>[ 
                'name'=> '西村　天裕',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_35.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            15=>[ 
                'name'=> 'バーヘイゲン',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_36.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            16=>[ 
                'name'=> '柿木　蓮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_37.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            17=>[ 
                'name'=> '秋吉　亮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_39.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            18=>[ 
                'name'=>  '福田　俊',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_40.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            19=>[  
                'name'=>  'B.ロドリゲス',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_41.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ], 
            20=>[  
                'name'=> '長谷川　凌汰',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_43.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            21=>[  
                'name'=> 'アーリン',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_44.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            22=>[ 
                'name'=> '田中　瑛斗',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_46.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            23=>[  
                'name'=> '鈴木　健矢',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_47.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            24=>[ 
                'name'=> '石川　直也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_51.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            25=>[ 
                'name'=> '池田　隆英',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_52.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            26=>[  
                'name'=> '玉井　大翔',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_54.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            27=>[   
                'name'=> '杉浦　稔大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_57.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            28=>[ 
                'name'=> '谷川　昌希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_58.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            29=>[ 
                'name'=> '根本　悠楓',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_59.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            30=>[  
                'name'=> '望月　大希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_62.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            31=>[ 
                'name'=> '北浦　竜次',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_63.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            32=>[  
                'name'=> '松本　遼大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_114.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            33=>[ 
                'name'=> '齋藤　伸治',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_115.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            34=>[ 
                'name'=> '高山　優希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_148.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            35=>[ 
                'name'=> '鈴木　遼太郎',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_150.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            36=>[  
                'name'=> '姫野　優也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_161.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            37=>[  
                'name'=> '杉谷　拳士',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_2.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            38=>[ 
                'name'=> '王　柏融',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_3.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            39=>[   
                'name'=> '谷口　雄也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_4.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            40=>[ 
                'name'=> '大田　泰示',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_5.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            41=>[  
                'name'=> '西川　遥輝',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_7.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            42=>[  
                'name'=> '近藤　健介',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_8.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            43=>[ 
                'name'=> '中島　卓也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_9.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            44=>[  
                'name'=> '清水　優心',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_10.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            45=>[  
                'name'=> '松本　剛',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_12.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            46=>[  
                'name'=> '清宮　幸太郎',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_21.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            47=>[  
                'name'=> '鶴岡　慎也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_22.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            48=>[  
                'name'=> '渡邉　諒',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_23.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            49=>[  
                'name'=>'野村　祐希',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_24.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            50=>[  
                'name'=> '淺間　大基',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_26.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            51=>[  
                'name'=> '古川　裕大',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_27.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            52=>[  
                'name'=> '宇佐見　真吾',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_30.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            53=>[  
                'name'=> '谷内　亮太',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_32.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            54=>[  
                'name'=> '石井　一成',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_38.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            55=>[ 
                'name'=> '木村　文紀',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_45.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            56=>[  
                'name'=> '上野　響平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_48.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            57=>[  
                'name'=> '佐藤　龍世',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_49.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            58=>[  
                'name'=> '五十幡　亮汰',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_50.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            59=>[ 
                'name'=> 'R.ロドリゲス',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_53.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            60=>[  
                'name'=> '難波　侑平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_55.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            61=>[  
                'name'=> '細川　凌平',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_56.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            62=>[ 
                'name'=> '郡　拓也',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_60.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            63=>[  
                'name'=> '今川　優馬',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_61.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            64=>[  
                'name'=> '田宮　裕涼',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_64.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            65=>[ 
                'name'=> '梅林　優貴',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_65.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            66=>[  
                'name'=> '万波　中正',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_66.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            67=>[  
                'name'=> '片岡　奨人',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_67.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            68=>[  
                'name'=> '石川　亮',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_68.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            69=>[  
                'name'=> '宮田　輝星',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_69.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            70=>[  
                'name'=> '今井　順之助',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_70.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            71=>[ 
                'name'=> '髙濱　祐仁',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_91.jpg',
                'created_at' => $now, 
                'updated_at' => $now
            ],
            72=>[  
                'name'=> '樋口　龍之介',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_93.jpg', 
                'created_at' => $now, 
                'updated_at' => $now
            ],
            73=>[  
                'name'=> '海老原　一佳',
                'image_path'=>'https://sp.fighters.co.jp/fitter/f/team/player/pict/2021_144.jpg', 
                'created_at' => $now, 
                'updated_at' => $now
            ],
    ];
         DB::table('players')->insert($data);
    }
}
