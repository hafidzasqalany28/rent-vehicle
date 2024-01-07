<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('vehicles');
            $table->foreignId('user_id')->constrained('users');
            $table->date('rent_start_date');
            $table->date('rent_end_date');
            $table->decimal('total_cost', 10, 2);
            $table->enum('status', ['Pending', 'Confirmed', 'Completed']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentals');
    }
};
