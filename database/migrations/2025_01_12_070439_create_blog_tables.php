<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Get the table name and column name from configuration


        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name', 155)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create( 'posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('slug');
            $table->text('sub_title')->nullable();
            $table->longText('body');
            $table->enum('status', ['published', 'scheduled', 'pending'])->default('pending');
            $table->dateTime('published_at')->nullable();
            $table->dateTime('scheduled_for')->nullable();
            $table->string('cover_photo_path');
            $table->string('photo_alt_text');
            $table->foreignId("user_id")
            ->constrained()
            ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create( 'category_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId( "post_id")
            ->constrained(table:  'posts')
            ->cascadeOnDelete();
            $table->foreignId("category_id")
            ->constrained(table:  'categories')
            ->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create( 'seo_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")
                ->constrained(table:  'posts')
                ->cascadeOnDelete();
            $table->text('title');
            $table->json('keywords')->nullable();
            $table->text('description');
            $table->timestamps();
        });

       

        Schema::create( 'news_letters', function (Blueprint $table) {
            $table->id();
            $table->string('email', 100)->unique();
            $table->boolean('subscribed')->default(true);
            $table->timestamps();
        });

        Schema::create( 'tags', function (Blueprint $table) {
            $table->id();
            $table->text('name', 50)->unique();
            $table->string('slug', 155)->unique();
            $table->timestamps();
        });

        Schema::create( 'post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")
            ->constrained(table:  'posts')
            ->cascadeOnDelete();
            $table->foreignId("tag_id")
                ->constrained(table:  'tags')
                ->cascadeOnDelete();
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
        Schema::dropIfExists( 'categories');
        Schema::dropIfExists( 'posts');
        Schema::dropIfExists( 'category_post');
        Schema::dropIfExists( 'seo_details');
        Schema::dropIfExists( 'comments');
        Schema::dropIfExists( 'news_letters');
        Schema::dropIfExists( 'tags');
        Schema::dropIfExists( 'post_tag');

    }
};
