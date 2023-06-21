<?php
    
    namespace App\Filament\Resources;
    
    use App\Filament\Resources\PostBlogResource\Pages;
    use App\Models\PostBlog;
    use Closure;
    use Filament\Forms;
    use Filament\Resources\Form;
    use Filament\Resources\Resource;
    use Filament\Resources\Table;
    use Filament\Tables;
    use Illuminate\Support\Str;
    
    class PostBlogResource extends Resource
    {
        protected static ?string $model = PostBlog::class;
        protected static ?string $navigationGroup = 'Blog';
        protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
        protected static ?string $navigationLabel = 'All Posts';
        
        public static function form( Form $form ): Form
        {
            return $form
                ->schema( [
                    Forms\Components\Card::make()
                        ->schema( [
                            Forms\Components\Grid::make( 2 )
                                ->schema( [ Forms\Components\TextInput::make( 'title' )
                                    ->required()
                                    ->maxLength( 2048 )->reactive()
                                    ->afterStateUpdated( function ( Closure $set, $state ) {
                                        $set( 'slug', Str::slug( $state ) );
                                    } ),
                                    Forms\Components\TextInput::make( 'slug' )
                                        ->required()
                                        ->maxLength( 2048 ),
                                ] ),
                            Forms\Components\RichEditor::make( 'body' )
                                ->required(),
                            Forms\Components\DateTimePicker::make( 'published_at' )
                                ->required()
                                ->default( date( 'Y-m-d H:i:s' ) ),
                            Forms\Components\Toggle::make( 'active' )
                                ->required(),
                        ] )->columnSpan( 7 ),
                    Forms\Components\Card::make()
                        ->schema( [
                            Forms\Components\FileUpload::make( 'thumbnail' ),
                            Forms\Components\Select::make( 'category_id' )
                                ->multiple()
                                ->relationship( 'category_blogs', 'title' )
                                ->required(),
                        ] )->columnSpan( 3 )
                ] )->columns( 10 );
        }
        
        public static function table( Table $table ): Table
        {
            return $table
                ->columns( [
                    Tables\Columns\TextColumn::make( 'title' ),
                    Tables\Columns\TextColumn::make( 'slug' ),
                    Tables\Columns\TextColumn::make( 'thumbnail' ),
                    Tables\Columns\TextColumn::make( 'body' ),
                    Tables\Columns\IconColumn::make( 'active' )
                        ->boolean(),
                    Tables\Columns\TextColumn::make( 'published_at' )
                        ->dateTime(),
                    Tables\Columns\TextColumn::make( 'user_id' ),
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
                'index' => Pages\ListPostBlogs::route( '/' ),
                'create' => Pages\CreatePostBlog::route( '/create' ),
                'view' => Pages\ViewPostBlog::route( '/{record}' ),
                'edit' => Pages\EditPostBlog::route( '/{record}/edit' ),
            ];
        }
    }
