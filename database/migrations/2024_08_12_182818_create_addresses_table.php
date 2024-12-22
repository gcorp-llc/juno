<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('address');
            $table->string('cover')->nullable();
            $table->string('location')->nullable();

            $table->boolean('saturday')->default(false);
            $table->string('start_saturday_time')->nullable();
            $table->string('end_saturday_time')->nullable();

            $table->boolean('sunday')->default(false);
            $table->string('star_sunday_time')->nullable();
            $table->string('end_sunday_time')->nullable();

            $table->boolean('monday')->default(false);
            $table->string('start_monday_time')->nullable();
            $table->string('end_monday_time')->nullable();

            $table->boolean('tuesday')->default(false);
            $table->string('start_tuesday_time')->nullable();
            $table->string('end_tuesday_time')->nullable();

            $table->boolean('wednesday')->default(false);
            $table->string('start_wednesday_time')->nullable();
            $table->string('end_wednesday_time')->nullable();

            $table->boolean('thursday')->default(false);
            $table->string('start_thursday_time')->nullable();
            $table->string('end_thursday_time')->nullable();

            $table->boolean('friday')->default(false);
            $table->string('start_friday_time')->nullable();
            $table->string('end_friday_time')->nullable();

            $table->text('phones')->nullable();
            $table->string('time_delay')->default("30");
            $table->integer('period')->default(30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
