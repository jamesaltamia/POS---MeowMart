<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('security_policies', function (Blueprint $table) {
            $table->id();
            $table->integer('min_password_length')->default(8);
            $table->boolean('require_uppercase')->default(true);
            $table->boolean('require_number')->default(true);
            $table->boolean('require_special_char')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('security_policies');
    }
};
