<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coffee;

class CoffeesTableSeeder extends Seeder
{
    public function run()
    {
        Coffee::create([
            'name' => 'Espresso',
            'description' => 'Strong and bold espresso coffee.',
            'price' => 2.50,
            'user_id' => 1 // Mengacu pada user admin
        ]);

        Coffee::create([
            'name' => 'Cappuccino',
            'description' => 'Rich and creamy cappuccino.',
            'price' => 3.00,
            'user_id' => 1 // Mengacu pada user admin
        ]);
        
        // Tambahkan lebih banyak kopi jika perlu
    }
}

