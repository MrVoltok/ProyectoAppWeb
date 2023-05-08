<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('apellidoP')->nullable(false)->default('');
            $table->string('apellidoM')->nullable(false)->default('');
            $table->string('calle')->nullable(false)->default('');
            $table->string('colonia')->nullable(false)->default('');
            $table->string('username')->nullable(false)->default('');
            $table->string('numCel')->nullable(false)->default('');
            $table->string('numTel')->nullable(false)->default('');
            $table->string('statusFreq')->nullable(false)->default('');
            $table->string('codPostal')->nullable(false)->default('');
            $table->string('status')->nullable(false)->default('');
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
};
