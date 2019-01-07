<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign("user_id")->references("id")->on("users");
			$table->string('nama', 250);
			$table->enum('jenis_kelamin',['L','P']);
			$table->string('nama_ayah', 200);
			$table->string('nama_ibu', 200);
			$table->string('agama', 10);
			$table->string('tempat_lahir', 100);
			$table->date('tgl_lahir');
			$table->string('alamat');
			$table->string('nomor_kontak');
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
        Schema::dropIfExists('biodata');
    }
}
