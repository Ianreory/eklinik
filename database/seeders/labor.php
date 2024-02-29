<?php

namespace Database\Seeders;

use App\Models\Umum;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UmumSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $tanggal = $faker->dateTimeBetween('2022-01-01', '2022-01-30')->format('Y-m-d');

            Umum::create([
                'user_id' => 1,
                'pasien_id' => $faker->numberBetween(2, 5),
                'tanggal' => $tanggal,
                'urut' => $faker->numberBetween(1, 100),
                'dokumen_medik' => $faker->text,
                'nama' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'no_identitas' => $faker->unique()->numerify('##########'),
                'alamat' => $faker->address,
                'jenis_kunjungan' => $faker->randomElement(['Baru', 'Ulang']),
                'tindak_lanjut' => $faker->randomElement(['Dirawat', 'Dirujuk', 'Pulang']),
                'diagnosis' => $faker->sentence,
                'terapi_obat' => $faker->text,
                'keterangan' => $faker->text,
            ]);
        }
    }
}
