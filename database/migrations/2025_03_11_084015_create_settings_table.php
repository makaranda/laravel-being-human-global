<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name')->nullable();
            $table->string('main_logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('page_banner')->nullable();
            $table->string('fevicon_logo')->nullable();
            $table->string('website_title')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_number2')->nullable();
            $table->string('email_address')->nullable();
            $table->text('address')->nullable();
            $table->text('google_map')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_youtube')->nullable();
            $table->string('social_instagram')->nullable();
            $table->text('footer_content')->nullable();
            $table->text('special_offer')->nullable();

            // Theme customization fields
            $table->text('font_colors')->nullable();
            $table->text('font_sizes')->nullable();
            $table->text('theme_colors')->nullable();

            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->unsignedBigInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
