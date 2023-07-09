<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Support\Str;
    
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
        protected $casts = [
            'published_at' => 'datetime'
        ];
        
        public function shortBody(): string
        {
            return Str::words( strip_tags( $this->body ), 90 );
        }
        
        public function getThumbnail()
        {
            if ( str_starts_with( $this->thumbnail, 'http' ) ) {
                return $this->thumbnail;
            }
            return '/storage/' . $this->thumbnail;
        }
        
        public function user()
        {
            return $this->belongsTo( User::class );
        }
        
        public function getFormattedDate()
        {
            return $this->published_at->format( 'd.m.Y' );
        }
        
        public function getDateYear()
        {
            return $this->published_at->format( 'Y' );
        }
        
        public function getDateMonthDay()
        {
            return $this->published_at->format( 'M d' );
        }
        
        public function category_blogs(): BelongsToMany
        {
            return $this->belongsToMany( CategoryBlog::class );
        }
    }
