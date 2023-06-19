<?php

namespace App\Filament\Resources\PostBlogResource\Pages;

use App\Filament\Resources\PostBlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPostBlog extends EditRecord
{
    protected static string $resource = PostBlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
