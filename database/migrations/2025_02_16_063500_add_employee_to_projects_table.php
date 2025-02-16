<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('employee')->nullable(); // เพิ่มคอลัมน์ employee (เป็น string และสามารถเป็น null ได้)
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('employee'); // ลบคอลัมน์ employee ในกรณี rollback
        });
    }
};
