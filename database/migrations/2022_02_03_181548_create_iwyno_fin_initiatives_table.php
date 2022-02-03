<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIwynoFinInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwyno_fin_initiatives', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_linkedin_profile')->nullable();
            $table->string('user_summary')->nullable();
            $table->string('user_country')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_link_tree')->nullable();
            $table->string('user_skill')->nullable();
            $table->string('user_value')->nullable();
            $table->string('user_help')->nullable();
            $table->string('user_currency')->nullable();
            $table->integer('user_hourly_rate')->nullable();
            $table->enum('check_hh',['0','1'])->nullable();
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
        Schema::dropIfExists('iwyno_fin_initiatives');
    }
}
