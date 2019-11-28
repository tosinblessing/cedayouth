<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnedgovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownedgovs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role_id')->index()->unsigned()->nullable();
            $table->string('organizationname')->nullable();
            $table->string('phonenumber');
            $table->string('Address')->nullable();
            $table->string('localgovernment')->nullable();
            $table->mediumText('profile_of_leadership')->nullable(); 
            $table->string('projectdone')->nullable();
            $table->string('name');
            $table->string('partnership_area')->nullable();
            $table->string('nearestministry')->nullable();
            $table->string('interestarea')->nullable();
            $table->string('email')->unique();
	        $table->integer('is_editor')->default(false);
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
        Schema::dropIfExists('ownedgovs');
    }
}
