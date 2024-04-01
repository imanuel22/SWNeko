<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\User;
use App\Models\Element;
use App\Models\Path;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Element::create([
            'name' => 'Imaginary',
            'slug' => 'Imaginary',
            'image'=>'elements/Imaginary.png'
        ]);
        Element::create([
            'name' => 'Lightning',
            'slug' => 'lightning',
            'image'=>'elements/lightning.png'
        ]);

        Element::create([
            'name' => 'Wind',
            'slug' => 'wind',
            'image'=>'elements/wind.png'
        ]);

        Element::create([
            'name' => 'Ice',
            'slug' => 'ice',
            'image'=>'elements/ice.png'
        ]);
        Element::create([
            'name' => 'Physical',
            'slug' => 'physical',
            'image'=>'elements/physical.png'
        ]);

        Element::create([
            'name' => 'Fire',
            'slug' => 'fire',
            'image'=>'elements/fire.png'
        ]);

        Element::create([
            'name' => 'Quantum',
            'slug' => 'quantum',
            'image'=>'elements/quantum.png'
        ]);



        //paths
        Path::create([
            'name'=>'Abundance',
            'slug'=>'abundance',
            'image'=>'/paths/path_abundance.png',
        ]);
        Path::create([
            'name'=>'Destruction',
            'slug'=>'destruction',
            'image'=>'/paths/path_destruction.png',
        ]);
        Path::create([
            'name'=>'Erudition',
            'slug'=>'erudition',
            'image'=>'/paths/path_erudition.png',
        ]);
        Path::create([
            'name'=>'Harmony',
            'slug'=>'harmony',
            'image'=>'/paths/path_harmony.png',
        ]);
        Path::create([
            'name'=>'Hunt',
            'slug'=>'hunt',
            'image'=>'/paths/path_hunt.png',
        ]);
        Path::create([
            'name'=>'Nihility',
            'slug'=>'nihility',
            'image'=>'/paths/path_nihility.png',
        ]);
        Path::create([
            'name'=>'Preservation',
            'slug'=>'preservation',
            'image'=>'/paths/path_preservation.png',
        ]);



        Character::create([
            'name' => 'Selee',
            'slug' => 'selee',
            'id_element' => '1',
            'id_path' => '1',
            'rarity' => '1',
            'gender' => 'Female',
            'id_faction'=>'1',
            'id_world'=>'1',
            'release_data'=>'1',
            'icon'=>'1',
            'portrait'=>'1',
            'splash_art'=>'1',
            'id_eidolond'=>'1',
            'id_skill'=>'1',
            'id_trace'=>'1',
            'id_stat'=>'1',
            'id_voice_actor'=>'1',
        ]);
    }
}
