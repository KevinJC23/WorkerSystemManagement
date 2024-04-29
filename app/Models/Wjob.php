<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Wjob extends Model {
        use HasFactory;

        protected $table = 'wjobs';

        public function workers(): HasMany {
            return $this->hassMany(Worker::class);
        }

        public function division(): BelongsTo {
            return $this->belongsTo(Division::class);
        }
    }