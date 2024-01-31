<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('skemas')->insert([
            'kd_skema' => 'SKM-001',
            'nm_skema' => 'Junior Web Developer',
            'jenis' => 'KKNI',
            'jml_unit' => 6
        ]);
        DB::table('skemas')->insert([
            'kd_skema' => 'SKM-002',
            'nm_skema' => 'Digital Marketing',
            'jenis' => 'Klaster',
            'jml_unit' => 10
        ]);
        DB::table('skemas')->insert([
            'kd_skema' => 'SKM-003',
            'nm_skema' => 'Desainer Multimedia Muda',
            'jenis' => 'KKNI',
            'jml_unit' => 10
        ]);
        DB::table('skemas')->insert([
            'kd_skema' => 'SKM-004',
            'nm_skema' => 'Network Administrator Muda',
            'jenis' => 'KKNI',
            'jml_unit' => 5
        ]);

        $skemaCodes = ['SKM-001', 'SKM-002', 'SKM-003', 'SKM-004'];
        $faker = Faker::create();

        foreach ($skemaCodes as $skemaCode) {
            DB::table('pesertas')->insert([
                'kd_skema' => $skemaCode,
                'NIK' => '1234567887654321',
                'nm_peserta' => $faker->name,
                'jekel' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
            ]);
        }
    }
}
