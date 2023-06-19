<?php

namespace App\Filament\Resources\PostBlogResource\Pages;

use App\Filament\Resources\PostBlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostBlog extends ViewRecord
{
    protected static string $resource = PostBlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
