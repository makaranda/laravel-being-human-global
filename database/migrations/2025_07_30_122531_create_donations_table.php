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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('payment_type')->nullable(); // one_time or monthly
            $table->decimal('amount', 10, 2);
            $table->boolean('cover_fee')->default(false);

            // Personal Information
            $table->string('title')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile')->nullable();
            $table->boolean('on_behalf')->default(false);

            // Billing Info
            $table->string('country')->nullable();
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->boolean('status')->default(1);
            $table->boolean('confirmation')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
