<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('usermetas', function (Blueprint $table) {
            //
            $table->dropColumn('meta_key');
            $table->dropColumn('meta_value');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usermetas', function (Blueprint $table) {
            //
            $table->string('meta_key',255)->nullable();
            $table->longText('meta_value')->nullable();
        });
    }
};