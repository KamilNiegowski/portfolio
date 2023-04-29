<?php
    
    namespace App\Filament\Resources;
    
    use App\Filament\Resources\ProjectResource\Pages;
    use App\Models\Project;
    use Filament\Forms;
    use Filament\Resources\Form;
    use Filament\Resources\Resource;
    use Filament\Resources\Table;
    use Filament\Tables;
    
    class ProjectResource extends Resource
    {
        protected static ?string $model = Project::class;
        
        protected static ?string $navigationIcon = 'heroicon-o-collection';
        
        public static function form( Form $form ): Form
        {
            return $form
                ->schema( [
                    Forms\Components\TextInput::make( 'title' )
                        ->required()
                        ->maxLength( 255 ),
                    Forms\Components\TextInput::make( 'github' )
                        ->required()
                        ->maxLength( 255 ),
                    Forms\Components\Toggle::make( 'active' )
                        ->required(),
                    Forms\Components\DateTimePicker::make( 'published_at' )
                        ->required(),
                    Forms\Components\Select::make( 'user_id' )
                        ->relationship( 'user', 'name' )
                        ->required(),
                ] );
        }
        
        public static function table( Table $table ): Table
        {
            return $table
                ->columns( [
                    Tables\Columns\TextColumn::make( 'title' ),
                    Tables\Columns\TextColumn::make( 'github' ),
                    Tables\Columns\IconColumn::make( 'active' )
                        ->boolean(),
                    Tables\Columns\TextColumn::make( 'published_at' )
                        ->dateTime(),
                    Tables\Columns\TextColumn::make( 'user.name' ),
                    Tables\Columns\TextColumn::make( 'created_at' )
                        ->dateTime(),
                    Tables\Columns\TextColumn::make( 'updated_at' )
                        ->dateTime(),
                ] )
                ->filters( [
                    //
                ] )
                ->actions( [
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ] )
                ->bulkActions( [
                    Tables\Actions\DeleteBulkAction::make(),
                ] );
        }
        
        public static function getRelations(): array
        {
            return [
                //
            ];
        }
        
        public static function getPages(): array
        {
            return [
                'index' => Pages\ListProjects::route( '/' ),
                'create' => Pages\CreateProject::route( '/create' ),
                'view' => Pages\ViewProject::route( '/{record}' ),
                'edit' => Pages\EditProject::route( '/{record}/edit' ),
            ];
        }
    }
