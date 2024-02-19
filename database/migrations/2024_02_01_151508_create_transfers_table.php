<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('amount', 15);
            $table->foreignId('account_from_id')
                ->references('id', 'account_from_id')
                ->on('accounts')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('account_to_id')
                ->references('id', 'account_to_id')
                ->on('accounts')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
