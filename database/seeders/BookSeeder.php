<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = ([
            ([
                "ISBN" => "9789797808983",
                "title" => "Manusia Setengah Salmon",
                "description" => "Manusia Setengah Salmon adalah kumpulan tulisan komedi Raditya Dika. Sembilan belas bab di dalam bercerita tentang pindah rumah, pindah hubungan keluarga, sampai pindah hati. Simak juga bab berisi tulisan galau, observasi ngawur, dan lelucon singkat khas Raditya Dika.",
                "publisher" => "Gagas media",
                "public_year" => "2017",
                "author" => "Radhitya Dika",

            ]),
            ([
                "ISBN" => "9786230034640",
                "title" => "Jujutsu Kaisen 0",
                "description" => "Yuta Okkotsu seorang siswa SMA yang menginginkan hukuman mati untuk dirinya sendiri. Dia menderita karena Rika - roh pendendam yang menghantuinya. Namun, Satoru Gojo, seorang guru di “Akademi Jujutsu” - sekolah para shaman, meyakinkan Okkotsu untuk pindah ke sekolah tersebut.",
                "publisher" => "Elex Media Komputindo",
                "public_year" => "2022",
                "author" => "Gege Akutami",

            ]),
            ([
                "ISBN" => "9786022497301",
                "title" => "Ensiklopedia Sains",
                "description" => "Salah satu buku anak Ensiklopedia Sains karya  Usborne menjadi pilihan yang tepat untuk dibaca oleh buah hati karena menyajikan kisah unik dan menarik perhatian. Buku ini membantu si Kecil untuk mempelajari ilmu pengetahuan atau sains seperti fisika, biologi, kimia, ilmu bumi, astronomi, dan masih banyak lagi. Pembahasannya sangat mudah dipahami tanpa perlu membuat anak bingung dengan konsep yang dipaparkan di dalam buku ini. Selain cerita dan pembahasannya yang mengesankan, buku ini memiliki ilustrasi dan sampul depan yang cerah sehingga anak semakin penasaran dalam membaca buku.",
                "publisher" => "Bhuana Ilmu Populer",
                "public_year" => "2014",
                "author" => "Usborne",
            ]),
        ]);
    }
}
