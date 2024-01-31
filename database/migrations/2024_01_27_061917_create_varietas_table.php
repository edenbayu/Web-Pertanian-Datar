<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varietas', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID column
            $table->string('name'); // Name column
            $table->text('description'); // Description column
            $table->timestamps(); // Created_at and updated_at columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varietas');
    }
}
