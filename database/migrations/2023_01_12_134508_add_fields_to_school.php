<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school', function (Blueprint $table) {
            //
            $table->id();
            $table->string('school_name', 255)->nullable(false);
            $table->string('principal', 255)->nullable(true);
            $table->string('board', 255)->nullable(false);
            $table->string('medium', 128)->nullable(false);
            $table->year('foundation_year')->nullable(true);
            $table->text('logo')->nullable(true);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
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
        Schema::drop('school');
    }
}
