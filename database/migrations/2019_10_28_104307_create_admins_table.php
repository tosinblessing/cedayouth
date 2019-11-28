<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->index()->unsigned()->nullable();
            $table->string('name');
            $table->string('programs')->nullable();
            $table->string('resources')->nullable();
            $table->string('applications')->nullable();
            $table->string('opportunities')->nullable();
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->boolean('is_super')->default(false);
            $table->string('password');
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
        Schema::dropIfExists('admins');
    }
}
