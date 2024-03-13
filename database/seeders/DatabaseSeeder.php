<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'ario',
            'email' => 'ario@example.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone'=> '12365478',
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Klinik Ario',
            'address'=> 'Jalan Solor Raya',
            'phone' =>'12365478',
            'email'=> 'bangojak@klinik.com',
            'doctor_name'=>'dr. Ario',
            'unique_code'=> '15987',
        ]);

        // call
        $this->call(DoctorSeeder::class);
    }
}
