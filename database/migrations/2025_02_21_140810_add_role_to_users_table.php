<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Fügt eine role-Spalte hinzu; Standardwert ist "user"
            $table->string('role')->default('user')->after('email');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Entfernt die role-Spalte
            $table->dropColumn('role');
        });
    }
}
