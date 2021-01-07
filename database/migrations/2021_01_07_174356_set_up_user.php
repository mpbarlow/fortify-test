<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;

class SetUpUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user = new User([
            'name'  => 'Taylor Otwell',
            'email' => 'taylor@laravel.com'
        ]);

        $user->password = Hash::make('password');
        $user->save();

        app(EnableTwoFactorAuthentication::class)($user);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
