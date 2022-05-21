<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaryAdvancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_advances', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->default('jhonDoe')->nullable();
            $table->string('workLocation')->default('LHR')->nullable();
            $table->string('amount')->default('0')->nullable();
            $table->string('date')->default('0')->nullable();
            $table->boolean('cutted')->default(false)->nullable();
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
        Schema::dropIfExists('salary_advances');
    }
}
