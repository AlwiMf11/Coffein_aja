<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            // Kopi
            [
                'name' => 'Kopi Susu Gula Aren Kopibro',
                'description' => 'Kopi susu khas Kopibro dengan manis alami gula aren, racikan andalan yang jadi favorit sedulur sak kampung.',
                'price' => 22000,
                'image' => 'menu/kopi-susu-gula-aren.jpg',
                'category' => 'kopi',
            ],
            [
                'name' => 'Es Kopi Jawa',
                'description' => 'Kopi hitam dingin dengan sentuhan rempah Jawa, cocok kanggo nemenin obrolan santai bareng konco.',
                'price' => 18000,
                'image' => 'menu/es-kopi-jawa.jpg',
                'category' => 'kopi',
            ],
            [
                'name' => 'Kopi Tubruk Tradisional',
                'description' => 'Kopi tubruk asli, diseduh langsung ala warung jaman biyen. Rasa lokal, suasana nyaman.',
                'price' => 15000,
                'image' => 'menu/kopi-tubruk.jpg',
                'category' => 'kopi',
            ],
            [
                'name' => 'Espresso Nusantara',
                'description' => 'Espresso dari biji kopi pilihan Nusantara, pekat lan legit kanggo sing pengin ngopi serius.',
                'price' => 20000,
                'image' => 'menu/espresso-nusantara.jpg',
                'category' => 'kopi',
            ],
            // Non Kopi
            [
                'name' => 'Coklat Kopibro',
                'description' => 'Coklat hangat lembut, pas kanggo sing ora doyan kopi tapi tetep pengin nongkrong bareng.',
                'price' => 18000,
                'image' => 'menu/coklat-kopibro.jpg',
                'category' => 'non_kopi',
            ],
            [
                'name' => 'Teh Rempah Jawa',
                'description' => 'Teh racikan rempah khas Jawa, anget lan wangi, ngademke pikiran sore-sore.',
                'price' => 15000,
                'image' => 'menu/teh-rempah-jawa.jpg',
                'category' => 'non_kopi',
            ],
            [
                'name' => 'Matcha Latte',
                'description' => 'Perpaduan matcha premium dan susu creamy, sentuhan modern nang Kopibro.',
                'price' => 20000,
                'image' => 'menu/matcha-latte.jpg',
                'category' => 'non_kopi',
            ],
            // Makanan
            [
                'name' => 'Pisang Goreng Madu',
                'description' => 'Pisang goreng renyah disiram madu asli, camilan wajib kanggo nemenin sak cangkir kopi.',
                'price' => 16000,
                'image' => 'menu/pisang-goreng-madu.jpg',
                'category' => 'makanan',
            ],
            [
                'name' => 'Roti Bakar Kopibro',
                'description' => 'Roti bakar isian coklat keju, dipanggang garing khas dapur Kopibro.',
                'price' => 17000,
                'image' => 'menu/roti-bakar-kopibro.jpg',
                'category' => 'makanan',
            ],
            [
                'name' => 'Snack Tradisional',
                'description' => 'Aneka jajanan pasar khas Jawa, cocok kanggo temenan santai sore-sore.',
                'price' => 12000,
                'image' => 'menu/snack-tradisional.jpg',
                'category' => 'makanan',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
