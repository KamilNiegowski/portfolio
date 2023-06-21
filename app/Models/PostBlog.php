<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    
    class PostBlog extends Model
    {
        use HasFactory;
        
        protected $fillable = [
            'title',
            'slug',
            'thumbnail',
            'body',
            'active',
            'published_at',
            'user_id'
        ];
        
        public function user()
        {
            return $this->belongsTo( User::class );
        }
        
        public function category_blogs(): BelongsToMany
        {
            return $this->belongsToMany( CategoryBlog::class );
        }
    }
