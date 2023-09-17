<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateLegaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legacies', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('content');
            $table->string('status')->default(1);
            $table->timestamps();
        });

        DB::table('legacies')->insert([
            'type'=>'PROJECTS',
            'content'=>'500'
        ]);

        DB::table('legacies')->insert([
            'type'=>'COUNTRIES',
            'content'=>'25'
        ]);

        DB::table('legacies')->insert([
            'type'=>'DIVERSE COMMODITIES STUDIED',
            'content'=>'20'
        ]);

        DB::table('legacies')->insert([
            'type'=>'YEARS OF GLOBAL EXPERIENCE',
            'content'=>'17'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legacies');
    }
}
