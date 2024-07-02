<?php

use App\Models\ListTasks;
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
        Schema::create('child_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('completed')->default(false);
            $table->dateTime('end_date')->nullable();
            $table->foreignId('priority_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(ListTasks::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('task_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_tasks');
    }
};
