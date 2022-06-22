<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMbServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mb_services', function (Blueprint $table) {
            $table->id();
            $table->enum('primary_contact',['owner', 'agent', 'other'])->nullable();
            $table->string('company');
            $table->string('first_name');
            $table->string('sur_name');
            $table->json('prefer_contact')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->text("address");
            $table->string('city');
            $table->string('country');
            $table->string('code');
            $table->enum('property_type',[' Residential,Commercial','Vacant Land', 'Industrial', 'Condominium/Residential', 'Condominium/Commercial', 'Recreation and Entertainment','Community Services','Public Services','Agricultural','Wild, Forested, Conservation Lands and Public Parks'])->nullable();
            $table->enum('known_size',['yes', 'no'])->nullable();
            $table->string('property_size');
            $table->enum('known_survey_copy',['yes', 'I don&#039;t know', 'I will look for it'])->nullable();
            $table->enum('survey_property_markers',['yes', 'I do not know'])->nullable();
            $table->json('service_required');
            $table->json('survey_purpose');
            $table->enum('request_stage',['Planning and budgeting', 'Ready to hire', 'Need a rush service'])->nullable();
            $table->text('date_of_Survey_plate');
            $table->text('message');
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
        Schema::dropIfExists('mb_services');
    }
}
