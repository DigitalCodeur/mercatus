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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table ->string('category');
            $table ->string('title');
            $table ->string('price')->nullable();
            $table ->string('localisation');
            $table ->string('tel_num');
            $table ->string('whatsapp_num')->nullable();
            $table ->text('email_annonce')->nullable();
            $table ->string('img_annonce')->nullable();
            $table ->longText('descriptif');
            $table ->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('annonces');
    }
};
