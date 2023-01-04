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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('name',);
            $table->string('nokp',);
            $table->string('gender',);
            $table->datetime('start_date', 0);
            $table->string('employment_status');
            $table->unsignedBigInteger('education_id');
            $table->unsignedBigInteger('position_id');
            $table->decimal('basic_salary', 6, 2);
            $table->decimal('allowance', 6, 2);
            $table->string('service_status');
            $table->string('kwsp_no');
            $table->string('location');
            $table->unsignedBigInteger('ppk_id');
            $table->string('edu_major');
            
            $table->foreign('ppk_id')->references('id')->on('ppks')->onDelete('cascade');
            $table->foreign('education_id')->references('id')->on('educations')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
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
};
