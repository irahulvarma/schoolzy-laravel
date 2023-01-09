<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('first_name', 255)->after('id')->nullable(false);
            $table->string('last_name', 255)->after('first_name')->nullable(false);
            $table->string('position', 255)->after('remember_token')->nullable(true);
            $table->text('display_picture')->nullable(true)->after('position');
            $table->string('phone', 32)->nullable(true)->after('display_picture');
            $table->enum('role', ['member', 'admin', 'school-admin'])->default('member')->nullable(false)->after('phone');

            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['first_name', 'last_name', 'position', 'display_picture', 'phone', 'role']);
            $table->string('name', 255)->nullable(true);
        });
    }
}
