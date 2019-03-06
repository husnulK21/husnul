<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_film',100);
            $table->string('nama_peminjaman',255);
            $table->string('no_ktp',15);
            $table->string('foto_ktp',25);
            $table->string('tanggal_pinjam',25);
            $table->string('tanggal_kembali',25);
            $table->string('harga_sewa',35);
            $table->string('status',10);
            $table->string('tanggal_input_data',25);
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
        Schema::dropIfExists('transaksi_peminjaman');
    }
}
