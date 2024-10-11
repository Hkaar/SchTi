<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('signup_families', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_member_type_id')->constrained('family_member_types')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('signup_id')->constrained('signups')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('name');
            $table->string('phone');
            $table->foreignId('signup_job_id')->constrained('signup_jobs')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('signup_families');
    }
};
