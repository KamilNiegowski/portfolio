<?php

namespace App\Filament\Resources\PostBlogResource\Pages;

use App\Filament\Resources\PostBlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePostBlog extends CreateRecord
{
    protected static string $resource = PostBlogResource::class;
}
