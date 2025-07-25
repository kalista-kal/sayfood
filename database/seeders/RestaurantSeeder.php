<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('restaurants')->insert([
            [
                'id' => 1,
                'name' => 'BART',
                'address' => 'Artotel Jakarta, Lantai 7, Jl. Sunda No. 3, Thamrin, Jakarta',
                'description' => 'Menu kreatif dengan cita rasa modern dan perpaduan unik bahan berkualitas. Pilihan ideal buat yang suka eksplorasi rasa dengan sentuhan kontemporer.',
                'user_id'=> 11,
                'distance' => 2.3,
                'image_url_resto' => 'assets/resto_images/bart.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Sana Sini Restaurant',
                'address' => 'Pullman Jakarta Indonesia, Jl. M.H. Thamrin 59, Thamrin, Jakarta',
                'description' => 'Pilihan buffet lengkap dari masakan Jepang, Cina, Barat, dan Nusantara. Variasi rasa yang kaya cocok untuk kamu yang ingin mencicipi berbagai hidangan dalam satu paket.',
                'user_id'=> 12,
                'distance' => 1.2,
                'image_url_resto' => 'assets/resto_images/western-station.jpg'
            ],
            [
                'id' => 3,
                'name' => 'KAUM Jakarta',
                'address' => 'Jl. Dr. Kusuma Atmaja No. 77-79, Thamrin, Jakarta',
                'description' => 'Masakan Indonesia autentik dengan bumbu kuat dan bahan segar. Hidangan khas dari berbagai daerah yang menghadirkan rasa tradisional dengan kualitas tinggi.',
                'user_id'=> 13,
                'distance' => 2.4,
                'image_url_resto' => 'assets/resto_images/Kaum-Jakarta-00-web.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Li Feng',
                'address' => 'Hotel Mandarin Oriental, Jakarta, Jl. M. H. Thamrin, Thamrin, Jakarta 10310',
                'description' => 'Klasik masakan Tionghoa dengan dimsum dan hidangan Cantonese yang kaya cita rasa. Pilihan menu yang cocok bagi pecinta masakan otentik dan premium.',
                'user_id'=> 14,
                'distance' => 1.7,
                'image_url_resto' => 'assets/resto_images/main-dining-room.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Henshin',
                'address' => 'The Westin Jakarta, Lantai 67-69, Jl. H. R. Rasuna Said, Kuningan, Jakarta 12940',
                'description' => 'Fusion unik antara masakan Jepang dan Peru dengan rasa inovatif dan berani. Menu yang memberikan pengalaman kuliner berbeda dan menarik.',
                'user_id'=> 15,
                'distance' => 2.0,
                'image_url_resto' => 'assets/resto_images/henshin-jakarta.jpg'
            ],
            [
                'id' => 6,
                'name' => 'Seasonal Tastes',
                'address' => 'The Westin Jakarta, Jl. H. R. Rasuna Said, Kuningan, Jakarta',
                'description' => 'Beragam pilihan masakan internasional dan lokal yang segar dan variatif, cocok untuk berbagai selera dan suasana makan.',
                'user_id'=> 16,
                'distance' => 1.0,
                'image_url_resto' => 'assets/resto_images/seasonal-tastes.jpg'
            ],
            [
                'id' => 7,
                'name' => 'Lyon',
                'address' => 'Hotel Mandarin Oriental, Jakarta, Jl. M. H. Thamrin, Thamrin, Jakarta',
                'description' => 'Masakan Prancis klasik dengan sentuhan modern dan bahan berkualitas tinggi. Pilihan menu yang elegan dan memanjakan lidah.',
                'user_id'=> 17,
                'distance' => 1.1,
                'image_url_resto' => 'assets/resto_images/lyon-glass-room.jpg'

            ],
            [
                'id' => 8,
                'name' => 'OPEN Restaurant',
                'address' => 'DoubleTree by Hilton Jakarta - Diponegoro, Jl. Pegangsaan Timur No. 17, Cikini - Menteng, Jakarta Pusat  10310',
                'description' => 'Menu internasional dengan perpaduan rasa yang kaya dan bahan segar. Cocok untuk santapan praktis dengan cita rasa otentik.',
                'user_id'=> 18,
                'distance' => 2.9,
                'image_url_resto' => 'assets/resto_images/with-its-modern-ambiance.jpg'
            ],
            [
                'id' => 9,
                'name' => 'Tugu Kunstkring Paleis',
                'address' => 'Jl. Teuku Umar No. 1, Menteng, Jakarta',
                'description' => 'Hidangan Indonesia dengan sentuhan seni dan sejarah yang kuat. Menawarkan berbagai menu tradisional yang kaya akan rempah dan cita rasa.',
                'user_id'=> 19,
                'distance' => 0.7,
                'image_url_resto' => 'assets/resto_images/tugu-kunstkring-paleis.jpg'
            ],
            [
                'id' => 10,
                'name' => 'Sudestada Grill',
                'address' => 'Jl. Irian No.18, Thamrin, Jakarta 10350',
                'description' => 'Masakan Latin Amerika dengan pilihan daging panggang dan hidangan segar. Menu penuh rasa dengan sentuhan khas yang memikat.',
                'user_id'=> 20,
                'distance' => 0.6,
                'image_url_resto' => 'assets/resto_images/Sudestada-Outdoor--1024x683.jpg'
            ],
            [
                'id' => 11,
                'name' => 'The Japanese',
                'address' => 'Sari Pacific Hotel, Jl. M. H. Thamrin No. 6, Thamrin, Jakarta 10340',
                'description' => 'Masakan Jepang otentik dengan bahan segar dan penyajian yang detail. Menu lengkap mulai dari sushi, sashimi hingga hidangan hangat.',
                'user_id'=> 21,
                'distance' => 3.0,
                'image_url_resto' => 'assets/resto_images/the-japanese-sari-pacific.jpg'
            ],
            [
                'id' => 12,
                'name' => 'Giyanti Coffee Roastery',
                'address' => 'Jl. Surabaya No. 20, Cikini, Jakarta',
                'description' => 'Pilihan kopi spesialti dari biji kopi terbaik dengan cita rasa yang kaya dan aroma khas. Tempat ideal untuk penikmat kopi sejati.',
                'user_id'=> 22,
                'distance' => 2.5,
                'image_url_resto' => 'assets/resto_images/lantai-atas.jpg'
            ],
            [
                'id' => 13,
                'name' => 'Arts Cafe',
                'address' => 'Raffles Jakarta, Jl. Prof. Dr. Satrio No. 3 - 5, Karet, Jakarta 12940',
                'description' => 'Menu internasional dengan cita rasa berkelas dan variasi hidangan yang elegan. Pilihan cocok untuk santapan berkualitas.',
                'user_id'=> 23,
                'distance' => 2.2,
                'image_url_resto' => 'assets/resto_images/buffet-area.jpg'
            ],
            [
                'id' => 14,
                'name' => 'Plataran Menteng',
                'address' => 'Jl. H.O.S. Cokroaminoto No. 42, Menteng, Jakarta',
                'description' => 'Masakan Indonesia tradisional dengan bahan segar dan resep turun-temurun. Hidangan yang kaya rasa dan penuh kehangatan.',
                'user_id'=> 24,
                'distance' => 1.5,
                'image_url_resto' => 'assets/resto_images/plataran-menteng.jpg'
            ],
            [
                'id' => 15,
                'name' => 'La Vue Rooftop Bar',
                'address' => 'The Hermitage, Lantai 9. Jl. Cilacap No. 1, Menteng, Jakarta 10310',
                'description' => 'Menu ringan dan minuman kreatif yang menyegarkan, cocok untuk bersantai dengan pemandangan kota yang indah.',
                'user_id'=> 25,
                'distance' => 1.5,
                'image_url_resto' => 'assets/resto_images/getlstd-property-photo.jpg'
            ],
            [
                'id' => 16,
                'name' => 'Dope Burger & Co.',
                'address' => 'Jl. Teuku Cik Ditiro No. 25, Menteng, Jakarta',
                'description' => 'Burger dengan cita rasa unik dan bahan berkualitas. Pilihan tepat bagi pecinta makanan cepat saji dengan sentuhan modern.',
                'user_id'=> 26,
                'distance' => 1.6,
                'image_url_resto' => 'assets/resto_images/aurava-architect-dope-burger-co-renovation1608521487-m.jpeg'
            ],
            [
                'id' => 17,
                'name' => 'Paradigma',
                'address' => 'Jl. Pegangsaan Barat No. 4, Cikini, Jakarta',
                'description' => 'Masakan fusion dengan inovasi tinggi dan penyajian artistik. Menu yang menarik bagi penikmat kuliner kreatif.',
                'user_id'=> 27,
                'distance' => 3.1,
                'image_url_resto' => 'assets/resto_images/paradigma-kafe-rsz.jpg'
            ],
            [
                'id' => 18,
                'name' => 'Bandar Djakarta',
                'address' => 'Taman Impian Jaya Ancol, Jl. Lodan Timur, Ancol, Jakarta 14430',
                'description' => 'Seafood segar dengan cita rasa khas Indonesia. Pilihan berbagai hidangan laut yang menggugah selera.',
                'user_id'=> 28,
                'distance' => 0.9,
                'image_url_resto' => 'assets/resto_images/2024071509544572296079.png'
            ],
            [
                'id' => 19,
                'name' => 'Cinnamon',
                'address' => 'Hotel Mandarin Oriental, Jakarta, Jl. M. H. Thamrin, Thamrin, Jakarta',
                'description' => 'Masakan India otentik dengan rempah kaya dan rasa kuat. Menu yang memanjakan pecinta kuliner India sejati.',
                'user_id'=> 29,
                'distance' => 0.7,
                'image_url_resto' => 'assets/resto_images/St.-Cinnamons-resized.jpg'
            ],
            [
                'id' => 20,
                'name' => 'Bunga Rampai',
                'address' => 'Jl. Teuku Cik Ditiro No. 35, Menteng, Jakarta',
                'description' => 'Masakan Indonesia dengan sentuhan modern dan keaslian rasa yang tetap terjaga. Pilihan hidangan kaya rempah dan autentik.',
                'user_id'=> 30,
                'distance' => 3.2,
                'image_url_resto' => 'assets/resto_images/VENUE 13 copy.jpg'
            ],
        ]);
    }
}
