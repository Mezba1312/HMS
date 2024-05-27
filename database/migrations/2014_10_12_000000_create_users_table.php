//user table
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->default('fname');
            $table->string('last_name')->default('lname');
            $table->string('user_type')->default('user');
            $table->string('number'); // Changed text to string for consistency
            $table->string('pending');
            $table->string('email')->unique(); // Changed text to string
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
        * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
