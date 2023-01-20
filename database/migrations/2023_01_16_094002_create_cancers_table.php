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
        Schema::create('cancers', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('slug');
            $table->decimal('number_of_cases', 9, 2);
            $table->decimal('number_of_deaths', 9, 2);
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
        Schema::dropIfExists('cancers');
    }
};
