<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text("city");
            $table->text("street_name");
            $table->integer("house_number");
            $table->bigInteger("price");
            $table->bigInteger("area");
            $table->integer("beds")->nullable();
            $table->integer("baths")->nullable();
            $table->integer("garage")->nullable();
            $table->bigInteger("rent")->nullable();
            $table->enum('status',['active', 'sold', 'all'])->default('active')->nullable();
	        $table->text("type");
            $table->foreignId('agent_id')->constrained('agents')->cascadeOnDelete();
            $table->text("about")->unique();
            $table->json('amenities');
            $table->text("vertical_image")->unique();
	        $table->text("horizontal_images");

            $table->timestamps();

            // $table->boolean('status')->nullable();
            // $table->unsignedBigInteger('type_id');
            // $table->foreign('type_id')->references('id')->on('types');

            // $table->foreign('agent_id')->references('id')->on('agents');
            // $table->unsignedBigInteger('agent_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
