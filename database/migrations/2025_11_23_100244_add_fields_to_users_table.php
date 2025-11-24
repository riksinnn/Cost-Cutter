<?php
// Create items table for marketplace

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
        Schema::table('users', function (Blueprint $table) {
            $table->string('student_id')->nullable()->after('email');
            $table->boolean('verified')->default(false)->after('student_id');
            $table->enum('role', ['user', 'admin'])->default('user')->after('verified');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['student_id', 'verified', 'role']);
        });
    }

};
