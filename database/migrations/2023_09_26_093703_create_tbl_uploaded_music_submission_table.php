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
        Schema::create('tbl_uploaded_music_submission', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('composer', 50);
            $table->string('arranger', 50);
            $table->string('type', 11);
            $table->string('No', 50);
            $table->string('year', 50);
            $table->string('status', 8);
            $table->string('uploader', 50);
            $table->string('path', 50);
            $table->date('upload_date');
            $table->date('update_date');
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
        Schema::dropIfExists('tbl_uploaded_music_submission');
    }
};
