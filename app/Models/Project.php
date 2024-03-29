<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    
    class Project extends Model
    {
        use HasFactory;
        
        protected $fillable = [
            'title',
            'github',
            'active',
            'thumbnail',
            'published_at',
            'user_id',
        ];
        protected $casts = [
            'published_at' => 'datetime'
        ];
        
        public function user(): BelongsTo
        {
            return $this->belongsTo( User::class );
        }
        
        public function getFormattedDate()
        {
            return $this->published_at->format( 'd.m.Y' );
        }
        
        public function categories(): BelongsToMany
        {
            return $this->BelongsToMany( Category::class );
        }
    }
