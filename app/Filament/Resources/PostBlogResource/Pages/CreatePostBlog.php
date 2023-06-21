<?php
    
    namespace App\Filament\Resources\PostBlogResource\Pages;
    
    use App\Filament\Resources\PostBlogResource;
    use Filament\Resources\Pages\CreateRecord;
    
    class CreatePostBlog extends CreateRecord
    {
        protected static string $resource = PostBlogResource::class;
        
        protected function mutateFormDataBeforeCreate( array $data ): array
        {
            $data[ 'user_id' ] = auth()->id();
            
            return $data;
        }
    }
