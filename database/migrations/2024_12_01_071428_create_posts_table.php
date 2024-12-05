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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('p_id');
           
             $table->string('title'); // post title
             $table->text('description'); // post description
             $table->string('header_pic')->nullable(); // path to the header image (nullable in case the image is optional)
             $table->integer('read_time')->default(0); // estimated read time in minutes
             $table->string('categories'); // categories (you can use a comma-separated string or a separate table for better normalization)
             $table->integer('cook_time'); // time to cook the dish (in minutes)
             $table->integer('prep_time'); // time to prepare the ingredients (in minutes)
             $table->integer('serves'); // number of people the post serves
 
             // Foreign key for relationship with users table
             $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // relationship with users table (user_id)
 
             $table->timestamps(); // created_at, updated_at
         });
           
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
