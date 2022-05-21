<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaySlipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay_slips', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->default('jhon')->nullable();
            $table->string('locationId')->default('0')->nullable();
            $table->string('basicSalary')->default('0000')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->string('daysInMonth')->default('12')->nullable();
            $table->string('paidDays')->default("12")->nullable();
            $table->string('LopDays')->default('12')->nullable();
            $table->string('overTimeDays')->default('1')->nullable();
            $table->string('attendanceAllowance')->default('0')->nullable();
            $table->string('fAndBAllowance')->default('0')->nullable();
            $table->string('grossSalary')->default('0')->nullable();
            $table->string('youEpf')->default('0')->nullable();
            $table->string('companyEpf')->default('0')->nullable();
            $table->string('companyEtf')->default('0')->nullable();
            $table->string('salaryAdvance')->default('0')->nullable();
            $table->string('otherDeductions')->default('0')->nullable();
            $table->string('bonus')->default('0')->nullable();
            $table->string('overTimePay')->default('0')->nullable();
            $table->string('otherEarnings')->default('0')->nullable();
            $table->string('totalEarnings')->default('0')->nullable();
            $table->string('totalDeductions')->default('0')->nullable();
            $table->string('netPay')->default('0')->nullable();
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
        Schema::dropIfExists('pay_slips');
    }
}
