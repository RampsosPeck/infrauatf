<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('surname',50);
            $table->string('cedula',8)->unique();
            $table->string('celular',8)->unique();
            $table->string('email',100)->unique()->nullable();
            $table->string('tipo');
            $table->string('cargo');
            $table->string('entidad');
            $table->string('password');
            $table->boolean('active')->default(true);
            $table->string('insertador');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
