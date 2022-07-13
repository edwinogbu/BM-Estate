<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_member_title')->nullable();
            $table->string('team_member_name')->nullable();
            $table->string('team_member_position')->nullable();
            $table->text('team_member_qualification')->nullable();
            $table->text('team_member_bio')->nullable();
            $table->text('team_member_certification')->nullable();
            // $table->text('team_member_award')->nullable();
            $table->text('team_member_seminar')->nullable();
            $table->text('team_member_image')->nullable();
            $table->foreignId('user_id')->constrained('users')->null()->cascadeOnDelete();
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
        Schema::dropIfExists('teams');
    }
}
