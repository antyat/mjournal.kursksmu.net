<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Database\Seeder;
use Laravel\Jetstream\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(CreateNewUser $createNewUser)
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $input = [
            'name'=>'Телегин Антон Александрович',
            'email'=>'teleginaa@kursksmu.net',
            'password'=>'11111111',
            'password_confirmation'=>'11111111',
        ];
        $base_user = $createNewUser->create($input);

        $base_user->currentTeam->name = 'кафедра чего-то';
        $base_user->currentTeam->save();
    }
}
