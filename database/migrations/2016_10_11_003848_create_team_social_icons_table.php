<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSocialIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_social_icons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('team_id');
            $table->string('social_class');
            $table->string('icon');
            $table->string('link');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('team_social_icons');
    }
}
