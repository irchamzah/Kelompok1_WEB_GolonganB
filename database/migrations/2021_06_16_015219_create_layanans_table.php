<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('namapj', 200)->default('');
            $table->string('alamat', 200)->default('');
            $table->string('notelp', 200)->default('');
            $table->string('name', 200)->default('');
            // $table->string('fotosampah', 200)->default('');
            $table->string('tanggaljemput', 200)->default('');
            $table->string('statuspesanan', 200)->default('');
            $table->string('pendapatan', 200)->default('');
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
        Schema::dropIfExists('layanans');
    }
}
