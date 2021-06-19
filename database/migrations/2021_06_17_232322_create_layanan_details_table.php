<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_details', function (Blueprint $table) {
            $table->id();
            $table->integer('layanan_id');
            $table->integer('category_id');
            $table->integer('user_id');
            // $table->string('file');
            $table->date('tanggaljemput');
            $table->string('keterangan');
            $table->string('status');
            $table->string('pendapatan');
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
        Schema::dropIfExists('layanan_details');
    }
}
