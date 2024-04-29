<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Division extends Model {
        use HasFactory;

        protected $table = 'divisions';

        public function wjobs(): BelongsToMany {
            return $this->belongsToMany(Wjob::class);
        }

        public function locations(): BelongsToMany {
            return $this->belongsToMany(Location::class, 'divisions_locations');
        }
    }