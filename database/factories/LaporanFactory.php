<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Generate kode tiket unik: REG-12345
            'ticket_id' => 'REG-' . $this->faker->unique()->numberBetween(10000, 99999),

            // Pilih acak jenis kekerasan
            'jenis_kekerasan' => $this->faker->randomElement([
                'Kekerasan Seksual', 'Perundungan', 'Kekerasan Fisik', 'Diskriminasi'
            ]),

            // Pilih acak status
            'status' => $this->faker->randomElement([
                'Verifikasi', 'Pemeriksaan', 'Penindakan', 'Selesai'
            ]),

            'deskripsi' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}
