<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('price')->nullable();
            $table->string('image1')->nullable(); // Changed text to string
            $table->string('image2')->nullable(); // Changed text to string
            $table->string('room_number')->nullable();
            $table->unsignedBigInteger('institution_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->integer('term')->nullable();
            $table->integer('capacity')->nullable();
            $table->integer('assigned')->default(0)->nullable();
            $table->boolean('is_ac')->nullable();
            $table->boolean('is_guest')->nullable();
            $table->boolean('is_alloted')->default(false)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('institution_id')->references('id')->on('institutions')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_details');
    }
}
