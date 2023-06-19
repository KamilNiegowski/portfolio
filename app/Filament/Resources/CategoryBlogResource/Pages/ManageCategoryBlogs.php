<?php

namespace App\Filament\Resources\CategoryBlogResource\Pages;

use App\Filament\Resources\CategoryBlogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryBlogs extends ManageRecords
{
    protected static string $resource = CategoryBlogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
