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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
                    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name'); // اسم المناسبة
            $table->text('description')->nullable(); // وصف (اختياري)
            $table->decimal('target_amount', 10, 2); // المبلغ المستهدف
            $table->decimal('collected_amount', 10, 2)->default(0); // المبلغ المجموع
            $table->enum('status', ['active', 'completed', 'cancelled'])->default('active');
            $table->string('slug')->unique(); // رابط عام للمشاركة
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
