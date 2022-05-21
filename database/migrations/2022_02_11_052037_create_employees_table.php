<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('staffId')->default('000')->nullable();
            $table->string('workLocation')->default('Location 1')->nullable();
            $table->string('designation')->default('crew member')->nullable();
            $table->string('fullName')->default('name')->nullable();
            $table->string('nameWithInitials')->default('name')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('gender')->default('male')->nullable();
            $table->string('nic')->default('111-111-111')->nullable();
            $table->string('address')->default('address')->nullable();
            $table->string('phone')->default('0000')->nullable();
            $table->string('homePhone')->default('0000')->nullable();
            $table->string('emailAddress')->default('@gmail.com')->nullable();
            $table->string('basicSalary')->default('0000')->nullable();
            $table->string('attendanceAllowance')->default('0000')->nullable();
            $table->string('fAndBAllowance')->default('0000')->nullable();
            $table->string('accountName')->default('0000')->nullable();
            $table->string('accountNumber')->default('0000')->nullable();
            $table->string('bankName')->default('bank')->nullable();
            $table->string('bankBranch')->default('branch')->nullable();
            $table->string('nameOfThePerson')->default('person')->nullable();
            $table->string('relationship')->default('relationship')->nullable();
            $table->string('phoneOfThePerson')->default('0000')->nullable();
            $table->string('addressOfThePerson')->default('address')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
