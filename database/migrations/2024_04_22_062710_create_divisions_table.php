<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void {
            Schema::create('divisions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('division_code', 3);
                $table->string('division_name');
                $table->string('head_division');
                $table->string('contact_info', 10);
                $table->timestamps();
            });
        }
        /**
         * Reverse the migrations.
         */
        public function down(): void {
            Schema::dropIfExists('divisions');
        }
    };