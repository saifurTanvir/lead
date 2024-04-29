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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leave_type_id')->comment('foreign key of leave_types table');
            $table->unsignedBigInteger('user_id')->comment('foreign key of users table');
            $table->timestamp('start_date')->comment('leave start date');
            $table->timestamp('end_date')->comment('leave end date');
            $table->text('reason')->nullable()->comment('leave reason');
            $table->string('admin_comment')->nullable()->comment('admin comment');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
