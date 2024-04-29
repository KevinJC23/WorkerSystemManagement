<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    use App\Models\Division;
    use App\Models\Location;

    return new class extends Migration {
        /**
         * Run the migrations.
         */
        public function up(): void {
            Schema::create('divisions_locations', function (Blueprint $table) {
                $table->increments('id');
                $table->foreignIdFor(Division::class)->onDelete('cascade');
                $table->foreignIdFor(Location::class)->onDelete('cascade');
                $table->timestamps();
            });
        }
        /**
         * Reverse the migrations.
         */
        public function down(): void {
            Schema::dropIfExists('divisions_locations');
        }
    };