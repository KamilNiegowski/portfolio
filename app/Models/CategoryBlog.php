<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    
    class CategoryBlog extends Model
    {
        use HasFactory;
        
        protected $fillable = [
            'title',
            'slug'
        ];
        
        public function post_blogs(): BelongsToMany
        {
            return $this->belongsToMany( PostBlog::class );
        }
    }
