<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitahirosimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitahirosima', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('title'); // 新球場のタイトルを保存するカラム
            $table->string('body');  // 新球場の本文を保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
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
        Schema::dropIfExists('kitahirosima');
    }
}
