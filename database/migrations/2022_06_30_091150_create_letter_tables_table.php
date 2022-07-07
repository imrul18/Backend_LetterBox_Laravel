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
        Schema::create('letter_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('img')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('receiver_phone')->nullable();
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
        Schema::dropIfExists('letter_tables');
    }
};
