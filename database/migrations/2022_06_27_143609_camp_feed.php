<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CampFeed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('camp_feeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('camp_id')->constrained();
            $table->string('title', 100)->nullable();
            $table->text('feed')->nullable();
            $table->bigInteger('mentor_id')->nullable()->default(12);
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
