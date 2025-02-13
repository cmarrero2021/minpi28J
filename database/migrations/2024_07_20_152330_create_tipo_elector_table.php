<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_elector', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_elector', 30);
            $table->timestamp('created_at')->nullable()->default(DB::raw("now()"));
            $table->timestamp('udated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_elector');
    }
};
