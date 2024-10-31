<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Student name
            $table->string('email')->unique(); // Unique email
            $table->string('phone')->nullable(); // Phone number, nullable
            $table->string('address')->nullable(); // Address, nullable
            $table->date('dob')->nullable(); // Date of birth, nullable
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
