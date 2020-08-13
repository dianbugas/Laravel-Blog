<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama');
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
        Schema::dropIfExists('prodis');
    }
}


// Schema::create('mahasiswas', function (Blueprint $table) {
//     $table->bigIncrements('id');
//     $table->String('nama');
//     $table->String('jk');
//     $table->String('tmp_lahir');
//     $table->date('tgl_lahir');
//     $table->String('email');
//     $table->decimal('no_hp', 13, 12);
//     $table->String('alamat');
//     $table->String('foto');
//     $table->char('angkatan', 4);
//     $table->String('status_kerja');
//     $table->String('tmp_kerja');
//     $table->increments('beasisiwa_id');
//     $table->increments('prodi_id');
//     $table->dateTime('updated_date');
//     $table->dateTime('delete_date');
//     $table->timestamps();
// });
