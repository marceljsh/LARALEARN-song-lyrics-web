<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'veaueed',
            'username' => 'veaueed',
            'email' => 'veaueed@laralearn.com',
            'password' => bcrypt('veaueed'),
            'is_admin' => true
        ]);
        
        User::factory()->create([
            'name' => 'Kim Chaewon',
            'username' => 'chaewon',
            'email' => 'chaewon@laralearn.com',
            'password' => bcrypt('chaewon'),
            'is_admin' => true
        ]);
        
        User::factory()->create([
            'name' => 'J. Cole',
            'username' => 'coleworld',
            'email' => 'jcole@laralearn.com',
            'password' => bcrypt('jcole'),
            'is_admin' => true
        ]);
        
        User::factory()->create([
            'name' => 'Kendrick Lamar',
            'username' => 'k.dot',
            'email' => 'kdot@laralearn.com',
            'password' => bcrypt('kdot')
        ]);
        
        User::factory()->create([
            'name' => 'The Notorious B.I.G',
            'username' => 'biggie.smalls',
            'email' => 'biggie@laralearn.com',
            'password' => bcrypt('biggie')
        ]);
        
        User::factory()->create([
            'name' => 'Eminem',
            'username' => 'slim.shady',
            'email' => 'eminem@laralearn.com',
            'password' => bcrypt('eminem')
        ]);
        
        User::factory()->create([
            'name' => '2pac',
            'username' => 'tupac',
            'email' => '2pac@laralearn.com',
            'password' => bcrypt('2pac')
        ]);

        User::factory()->create([
            'name' => 'Ice Cube',
            'username' => 'icecube',
            'email' => 'icecube@laralearn.com',
            'password' => bcrypt('icecube')
        ]);
    }
}
