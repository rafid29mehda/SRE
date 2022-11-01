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
        Schema::create('guard_passes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable()->default('text');
            $table->string('email', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->decimal('nid', 11, 0)->nullable();
            $table->string('location', 255)->nullable();
            $table->date('date');
            $table->text('purpose')->nullable();
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
        Schema::dropIfExists('guard_passes');
    }
};
