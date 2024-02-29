<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            $startDate = now()->subDays(rand(1, 30));

            // Menghasilkan nomor telepon acak sebagai string numerik
            $phoneNumber = $faker->numerify('##########');

            DB::table('pasien')->insert([
                'id' => $index + 4, // ID dimulai dari 5
                'tanggal_pendaftaran' => $startDate,
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'nomer_telepon' => $phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
