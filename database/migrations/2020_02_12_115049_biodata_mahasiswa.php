<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiodataMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("biodata_mahasiswa",function (Blueprint $table) {
			// set up columns
			$table->increments("id");
			$table->string("name");
			$table->string("nim");
			$table->text("address");
			$table->timestamps();

            // soft delete erat kaitannya dengan kolom deleted_at
         

    });
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop("biodata_mahasiswa");
    }
}
