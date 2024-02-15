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
        Schema::create('model_uns', function (Blueprint $table) {
            $table->id();
            $table->string('titre_sondage');
            $table->string('question1');
            $table->string('reponse_opt_1');
            $table->string('reponse_opt_2');
            $table->string('question2');
            $table->string('question3');
            $table->string('reponse_opt_3');
            $table->string('reponse_opt_4');
            $table->string('reponse_opt_5');
            $table->string('question4');
            $table->string('question5');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            // 'titre_sondage',
            // 'question1',
            // 'reponse_opt_1',
            // 'reponse_opt_2',
            // 'question2',
            // 'question3',
            // 'reponse_opt_3',
            // 'reponse_opt_4',
            // 'reponse_opt_5',
            // 'question4',
            // 'question5',
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
