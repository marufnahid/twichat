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
            $table->string('username')->default('');
            $table->string('fname')->nullable()->default('');
            $table->string('lname')->nullable()->default('');
            $table->longText('bio')->nullable()->default('');
            $table->string('location',255)->nullable()->default('');
            $table->string('profileimage')->nullable()->default('');
            $table->string('coverimage')->nullable()->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usermetas', function (Blueprint $table) {
            //
            $table->dropColumn(['username','fname','lname','bio','location','profileimage','coverimage']);
        });
    }
};
