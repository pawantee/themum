<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('mothers_fathter', function (Blueprint $table) {
            $table->increments('mother_id');
            $table->string('name');
            $table->string('id_crad_mun');
            $table->string('profession_mum');
            $table->string('religion_mum');
            $table->string('study_mum');
            $table->string('tel_mum');
            $table->string('fathter');
            $table->string('id_crad_father');
            $table->string('profession_fathter');
            $table->string('religion_fathter');
            $table->string('study_fathter');
            $table->string('tel_fathter');
            $table->string('address');

            $table->integer('no_id');
            $table->integer('kid_id');
            $table->timestamps();
            // $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mothers_fathter');
    }
}
