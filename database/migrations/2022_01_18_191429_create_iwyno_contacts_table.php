<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIwynoContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwyno_contacts', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('company');
            $table->String('email');
            $table->String('location');
            $table->String('message');
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
        Schema::dropIfExists('iwyno_contacts');
    }
}
