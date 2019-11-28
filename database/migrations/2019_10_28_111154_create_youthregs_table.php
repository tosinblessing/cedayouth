<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYouthregsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youthregs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->index()->unsigned()->nullable();
            $table->string('firstname' , 40)->nullable();
            $table->string('name' , 40);
            $table->tinyInteger('gender')->nullable();
            $table->string('phonenumber');
            $table->timestamp('dateofbirth')->nullable();
            $table->string('Address')->nullable();
            $table->string('biometriccap')->nullable();
            $table->string('localgovernment')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('employmentstatus')->nullable();
            $table->string('workexperience')->nullable();
            $table->string('nearestministry')->nullable();
            $table->string('interestarea')->nullable();
            $table->string('email')->unique();
	        $table->integer('is_edited')->default(0);
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
        Schema::dropIfExists('youthregs');
    }
}
