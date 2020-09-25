<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Store::create([
            'owner' => 'Helfanza',
            'name' => 'Warteg Barokah',
            'email' => "helfanza@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Margadana Tegal",
        ]);
        \App\Store::create([
            'owner' => 'Nanda Alfaradis',
            'name' => 'Warteg Explore',
            'email' => "nanda@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Margadana Tegal",
        ]);
        \App\Store::create([
            'owner' => 'Afif',
            'name' => 'Warteg Afif',
            'email' => "afif@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Bulakamba Brebes",
        ]);
        \App\Store::create([
            'owner' => 'Iskandar',
            'name' => 'Warteg Brengos',
            'email' => "iskandar@gmail.com",
            'password' => \Illuminate\Support\Facades\Hash::make('12345678'),
            'logo' => "sample.jpg",
            'address' => "Bulakamba Brebes",
        ]);
    }
}
