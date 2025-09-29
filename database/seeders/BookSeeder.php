<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Melangkah', 'author' => 'J. S. Khairen', 'year' => '2020'],
            ['title' => 'Manajemen Risiko dan Investasi', 'author' => 'Prof. Dr. Sukmawati Sukamulja', 'year' => '2024'],
            ['title' => 'Pemrograman Laravel', 'author' => 'Ade Rahmat Iskandar', 'year' => '2024'],
            ['title' => 'Pedoman Sukses Budi Daya Ikan Lele', 'author' => 'Hadi Tribowo', 'year' => '2022'],
            ['title' => 'Manajemen Pemasaran: Pendekatan Konsep dan Aplikasi dalam Bisnis', 'author' => 'Alexander Hery, S.E., M.Si., CRP. RSA., CFRM., CIFRS., FAAFM.', 'year' => '2024'],
        ];

        foreach ($data as $item) {
            $book = Book::create([
                'title' => $item['title'],
                'author' => $item['author'],
                'year' => $item['year'],
            ]);
        }
    }
}
