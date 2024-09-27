<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_positions', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->string('area_name');
            $table->string('id_employee');
            $table->string('id_boss');
            $table->string('id_role');
            $table->timestamps();

            $table->foreign('id_employee')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('id_boss')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_positions');
    }
}
