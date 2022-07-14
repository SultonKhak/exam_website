<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Pantai Papuma, Jember',
            'description' => "Pantai papuma berada di Desa Lojejer, Kecamatan Wuluhan, Kabupaten Jember.
             Pantai papuma adalah salah satu pantai yang cukup populer dan terkenal di Jember.
               Namun, keindahan pasir putih Malikan ini cukup eksotis dan mampu menarik perhatian wisatawan lokal hingga mancanegara untuk datang kesana.",
            'image' => 'image/papuma.jpg'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Pantai Gili Trawangan, Lombok',
            'description' => "Gili Trawangan adalah yang terbesar dari ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. 
            Kelebihan Gili Trawangan dibandingkan dengan pantai lain adalah kita dapat menikmati sunset dan juga sunrise sekaligus di pantai ini. 
            Hal ini terjadi karena Gili Trawangan memiliki pantai yang menghadap timur dan menghadap barat, dan jaraknya tidak terlalu jauh. 
            Sehingga baik sunrise maupun sunset dapat kita nikmati di pantai ini.",
            'image' => 'image/gilitrawangan.jpg'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 1,
            'title' => 'Pantai Raja Empat, Raja Empat',
            'description' => "Raja Ampat adalah kepulauan yang terdiri dari banyak sekali pulau karang dan tersebar
             luas di seluruh wilayahnya. Namun demikian, Raja Ampat memiliki 4 pulau utama yang paling besar, 
             yaitu Pulau Waigeo, Pulau Batanta, Pulau Salawati, dan Pulau Misool. Empat pulau besar inilah yang 
             menjadi titik awal penyebaran seluruh penduduk Raja Ampat yang sebagian besar berprofesi sebagai nelayan.
              Wilayah perairan adalah daya tarik utama Raja Ampat, mengingat perairan Raja Ampat adalah salah satu dari 10 perairan terbaik di seluruh dunia. Hal ini didasarkan pada berbagai penelitian tentang kekayaan flora-fauna dan kelestarian alam laut yang dimiliki Raja Ampat.",
            'image' => 'image/rajaempat.png'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Gunung Rinjani, Lombok',
            'description' => "Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. 
            Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian
             3.726 m dpl serta terletak pada lintang 8º25' LS dan 116º28' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya.",
            'image' => 'image/rinjani.jpeg'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Gunung Semeru, Lumajang',
            'description' => "Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. 
            Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru,
             3.676 meter dari permukaan laut (mdpl). Gunung Semeru juga merupakan gunung berapi tertinggi ketiga
              di Indonesia setelah Gunung Kerinci di Sumatra dan Gunung Rinjani di Nusa Tenggara Barat.",
            'image' => 'image/semeru.jpg'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Gunung Jayawijaya, Papua',
            'description' => "Pegunungan Jayawijaya adalah rangkaian pegunungan yang membujur di Provinsi Papua, 
            Indonesia. Pegunungan Jayawijaya adalah rangkaian pegunungan tertinggi di Indonesia, dengan puncak 
            tertingginya yaitu Puncak Jaya (4.884 meter dari permukaan laut). Di puncak pegunungan Jayawijaya terdapat
             salju abadi yang jumlahnya semakin menipis akibat pemanasan global. ",
            'image' => 'image/jayawijaya.jpg'
        ]);

        DB::table('articles')->insert([
            'user_id' => 2,
            'category_id' => 3,
            'title' => 'Kebun Binatang Ragunan, Jakarta',
            'description' => "Kebun Binatang Ragunan adalah kebun binatang pertama di Indonesia. 
            Kebun binatang ini didirikan pada tahun 1864 dengan nama Planten En Dierentuin yang berarti \"Tanaman dan Kebun Binatang.\" 
            Terletak pada tanah seluas 10 hektare di kawasan Cikini, Menteng, Jakarta Pusat yang merupakan pemberian 
            Raden Saleh. Saat itu, Planten En Dierentuin dikelola oleh Perhimpunan Penyayang Flora dan Fauna Batavia yang 
            tergabung dalam Culturule Vereniging Planten en Dierentuin at Batavia. ",
            'image' => 'image/ragunan.jpeg'
        ]);
        
    }
}
