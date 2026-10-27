<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
    
        ]);
        db::table('beritas')->insert([
            'judul' => 'iya kita dimana-mana',
            'slug' => 'iya kita ada di mana- mana',
            'penulis' => 'lalapo',
            'konten' => 'hwilelihkugjyffffffffffffffff
            ffffffffffffffffffffffffffffffffffffffffffvvvvvvv
            vvvvvvvvvvvvvvvvvvvvvwwwwwwwwwwwwwwwwwwwwwwwooooooooo
            ooooooooooooooooopppppppppppppppppppppqqqqqqqqqqqqqqqqqq
            qqqqlllllllllllllllllllllllllsssssssssssssssssssssssssssss
            sssssssssssssnnnnnssssssssssssssssssssssssssssssssssssssssssss
            ssssssssssssssssssssssssssssssnnnnnnn'
        ]);
    }
}
