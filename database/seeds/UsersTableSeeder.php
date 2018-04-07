<?php

use App\User;
use App\UserInfo;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        UserInfo::truncate();

        factory(User::class, 10000)->create()->each(function ($user) {
            factory(UserInfo::class)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
