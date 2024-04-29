<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use App\Models\Division;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void {
            Schema::create('wjobs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('wjob_code', 3);
                $table->string('wjob_name');
                $table->string('wjob_status');
                $table->date('start_date');
                $table->foreignIdFor(Division::class);
                $table->timestamps();
            });
        }
        /**
         * Reverse the migrations.
         */
        public function down(): void {
            Schema::dropIfExists('wjobs');
        }
    };