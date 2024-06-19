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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->string("nomor_pesanan", 20);
            $table->string("nama_pembeli");
            $table->enum("is_done", ["y", "n"]);
            $table->date('tanggal_pengambilan');
            $table->integer('jumlah_harga');
            $table->timestamps();

            $table->foreign("product_id")->references("id")->on("products")->onDelete("restrict")->onUpdate("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("restrict")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
};
