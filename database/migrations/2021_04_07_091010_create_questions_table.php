<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creating table
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question', 2500)->unique();
            $table->timestamps();
        });

        // Inserting data
        DB::table('questions')->insert(
                array('question' => 'Pontosan mi a Laravel?')
        );

        // Inserting data
        DB::table('questions')->insert(
            array('question' => 'Melyik a legfrissebb Laravel verzió?')
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
