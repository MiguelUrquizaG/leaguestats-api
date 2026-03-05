<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'premium_price', 'value' => '4.99'],
            ['key' => 'premium_multiplier', 'value' => '1.05'],
            ['key' => 'premium_multiplier_enabled', 'value' => '1'],
            ['key' => 'premium_details_enabled', 'value' => '1'],
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}
