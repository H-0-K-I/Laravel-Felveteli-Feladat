<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('question_id')->constrained('questions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('answer', 2500);
            $table->integer('upvotes')->nullable();
            $table->timestamps();
        });

        DB::table('answers')->insert(
            array('question_id' => 2,
                'answer' => 'Laravel 6.2',
                'upvotes' => 0
            )
        );

        DB::table('answers')->insert(
            array('question_id' => 2,
                'answer' => 'Jelenleg a Laravel 8 a legújabb verzió.',
                'upvotes' => 4
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
