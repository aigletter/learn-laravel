<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * id biginteger
     * title varchar(100)
     * description text
     * price decimal(10,2)
     * quantity integer
     * created_at timestamp
     * updated_at timestamp
     *
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigInteger('id', true)->unsigned();
            $table->string('title', 100);
            $table->text('description');
            $table->decimal('price', 10);
            $table->integer('quantity')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
