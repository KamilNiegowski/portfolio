<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    
    class Category extends Model
    {
        use HasFactory;
        
        protected $fillable = [
            'title',
            'slug',
        ];
        
        public function projects(): BelongsToMany
        {
            return $this->belongsToMany( Project::class );
        }
    }