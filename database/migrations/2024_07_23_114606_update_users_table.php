<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('etudiant')->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Revert back to enum if needed, you may need to use raw SQL here
            $table->enum('role', ['administrateur', 'professeur', 'etudiant'])->default('etudiant')->change();
        });
    }
}
