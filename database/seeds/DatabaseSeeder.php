<?php

use Illuminate\Database\Seeder;
use App\Hour;
use App\Language;
use App\Professor;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hour::create(['hour' => '07:00:00']);
        Hour::create(['hour' => '08:00:00']);
        Hour::create(['hour' => '09:00:00']);
        Hour::create(['hour' => '10:00:00']);
        Hour::create(['hour' => '11:00:00']);
        Hour::create(['hour' => '12:00:00']);
        Hour::create(['hour' => '13:00:00']);
        Hour::create(['hour' => '14:00:00']);
        Hour::create(['hour' => '15:00:00']);
        Hour::create(['hour' => '16:00:00']);
        Hour::create(['hour' => '17:00:00']);
        Hour::create(['hour' => '18:00:00']);
        Hour::create(['hour' => '19:00:00']);
        Hour::create(['hour' => '20:00:00']);
        Hour::create(['hour' => '21:00:00']);

        Language::create(['language' => 'Inglés']);
        Language::create(['language' => 'Francés']);
        Language::create(['language' => 'Italiano']);
        Language::create(['language' => 'Portugués']);
        Language::create(['language' => 'Japonés']);

        factory(App\Classroom::class, 50)->create();
        factory(App\Professor::class, 100)->create();
    }
}
