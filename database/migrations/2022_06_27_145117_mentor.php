<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mentor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('mentor', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('telepon',15);
            $table->bigInteger('feed_id')->nullable()->default(12);
            $table->string('alamat',100);
            $table->string('email',25);
            $table->text('password');
            $table->timestamps();
            $table->softDeletes();
        });
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
