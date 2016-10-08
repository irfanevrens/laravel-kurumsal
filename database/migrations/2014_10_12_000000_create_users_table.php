<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /*
     * 2014_10_12_000000_create_users_table.php çoğaltılıp blueprint hazırlandıktan sonra
     * composer dump-autoload
     * php artisan make:migration create_users_table
     * php artisan migrate
     * php artisan make:migration create_tasks_table --table=tasks --create=tasks <--- yeni migration dosyası yaratmak
     */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60); // 60 karakter olmak zorunda hashlemek için
            $table->integer('authority');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
