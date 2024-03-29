<?php
    
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Cache;
    
    class TextWidget extends Model
    {
        use HasFactory;
        
        protected $fillable = [
            'key',
            'image',
            'title',
            'content',
            'active',
            'background_color_dark_theme',
            'background_color_light_theme',
        ];
        
        public static function getTitle( string $key ): string
        {
            $widget = Cache::get( 'text-widget-' . $key, function () use ( $key ) {
                return TextWidget::query()
                    ->where( 'key', '=', $key )
                    ->where( 'active', '=', 1 )
                    ->first();
            } );
            if ( $widget ) {
                return $widget->title;
            }
            
            return '';
        }
        
        public static function getContent( string $key ): string
        {
            $widget = Cache::get( 'text-widget-' . $key, function () use ( $key ) {
                return TextWidget::query()
                    ->where( 'key', '=', $key )
                    ->where( 'active', '=', 1 )
                    ->first();
            } );
            if ( $widget ) {
                return $widget->content;
            }
            
            return '';
        }
        
        public static function getImage( string $key ): string
        {
            $widget = Cache::get( 'text-widget-' . $key, function () use ( $key ) {
                return TextWidget::query()
                    ->where( 'key', '=', $key )
                    ->where( 'active', '=', 1 )
                    ->first();
            } );
            if ( $widget ) {
                return $widget->image;
            }
            
            return '';
        }
        
        public static function getBackgroundColorDarkTheme( string $key ): string
        {
            $widget = Cache::get( 'text-widget-' . $key, function () use ( $key ) {
                return TextWidget::query()
                    ->where( 'key', '=', $key )
                    ->where( 'active', '=', 1 )
                    ->first();
            } );
            if ( $widget ) {
                return $widget->background_color_dark_theme;
            }
            
            return '';
        }
        
        public static function getBackgroundColorLightTheme( string $key ): string
        {
            $widget = Cache::get( 'text-widget-' . $key, function () use ( $key ) {
                return TextWidget::query()
                    ->where( 'key', '=', $key )
                    ->where( 'active', '=', 1 )
                    ->first();
            } );
            if ( $widget ) {
                return $widget->background_color_light_theme;
            }
            
            return '';
        }
    }
