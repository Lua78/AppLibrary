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
        Schema::create('tbl_loans', function (Blueprint $table) {
            $table->id();
            $table->string('lender');
            $table->string('student_meat');
            $table->unsignedBigInteger('id_book');
            $table->integer('loan_days');
            $table->boolean('returned')->default(false);
            $table->date('date_loan')->default(date('Y-m-d'));
            $table->date('returned_on')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('id_book')->references('id')->on('tbl_books');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_loans');
    }
};
