<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('answers', function($table) {
            $table->increments('id');
            $table->string('text');
            $table->integer('question_id');
            
//            $table->foreign('question_id')
//                    ->references('id')->on('questions')
//                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('answers');
    }

}
