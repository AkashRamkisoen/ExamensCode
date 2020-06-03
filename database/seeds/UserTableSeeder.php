<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create(['name' => 'owner',
            'email' => 'asantoryor@gmail.com',
            'password' =>  bcrypt('test123')])
            ->each(function (User $user) {
                $user->assignRole('owner');
            });
        
            factory(App\User::class, 1)->create(['name' => 'moderator',
            'email' => 'moderator@mail.com',
            'password' =>  bcrypt('test123')])
            ->each(function(User $user){
                $user->assignRole('moderator');
            });


            factory(App\User::class, 1)->create(['name' => 'user',
            'email' => 'user@mail.com',
            'password' =>  bcrypt('test123')])
            ->each(function(User $user){
                $user->assignRole('user');
            });

            factory(App\User::class, 1)->create(['name' => 'deleter',
            'email' => 'deleter@mail.com',
            'password' =>  bcrypt('test123')])
            ->each(function(User $user){
                $user->assignRole('deleter');
            });

            factory(App\User::class, 25)->create();
    }
}
