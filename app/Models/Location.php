<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;

    class Location extends Model {
        use HasFactory;

        protected $table = 'locations';
        
        public function divisions(): BelongsToMany {
            return $this->belongsToMany(Division::class, "divisions_locations"); 
        }
    }