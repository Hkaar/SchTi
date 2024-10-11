<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('name');
            $table->string('birthplace');
            $table->date('birthdate');
            $table->string('phone');
            $table->text('address');
            $table->foreignId('gender_id')->constrained('genders')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('district_id')->constrained('districts')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('city_id')->constrained('cities')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('family_status_id')->constrained('family_statuses')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('child_position');
            $table->foreignId('school_id')->constrained('schools')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};
