<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnies', function (Blueprint $table) {
            $table->id();
            $table->string('compagnyName');
            $table->text('compagnyAddress');
            $table->string('PostalCode', 100);
            $table->string('DoorNumber', 100);
            $table->string('phoneNumber', 100);
            $table->string('email');
            $table->string('contactName');
            $table->string('contactFirstName');
            $table->text('image');
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
        Schema::dropIfExists('compagnies');
    }
};
