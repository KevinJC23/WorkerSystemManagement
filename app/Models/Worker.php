<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Worker extends Model {
        use HasFactory;

        protected $table = 'workers';

        public function wjob(): BelongsTo {
            return $this->belongsTo(Wjob::class);
        }
    }