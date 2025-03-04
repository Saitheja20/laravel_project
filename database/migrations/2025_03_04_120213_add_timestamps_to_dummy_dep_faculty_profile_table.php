<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToDummyDepFacultyProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dummy_dep_faculty_profile', function (Blueprint $table) {
            //
            $table->timestamps(); // Adds both created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dummy_dep_faculty_profile', function (Blueprint $table) {
            //
              $table->dropTimestamps(); // Drops both created_at and updated_at
        });
    }
}
