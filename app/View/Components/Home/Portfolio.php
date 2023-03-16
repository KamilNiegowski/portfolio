<?php
    
    namespace App\View\Components\Home;
    
    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\Support\Arr;
    use Illuminate\View\Component;

    class Portfolio extends Component
    {
        public array $items = [];
        public array $tabs = [];
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->items = [
                [
                    'category' => [ 'Laravel', 'Tailwind.css', 'PHP' ],
                    'title' => 'Strona portfolio w Laravel',
                    'image' => url( '/img/laravel.webp' ),
                    'github' => 'https://github.com/KamilNiegowski/portfolio'
                ],
                [
                    'category' => [ 'TotalCommander', 'C#' ],
                    'title' => "A'la TotalCommander",
                    'image' => url( '/img/total_commander.webp' ),
                    'github' => 'https://github.com/KamilNiegowski/TotalCommander'
                ],
                [
                    'category' => [ 'JavaScript', 'jQuery' ],
                    'title' => 'Dynamiczny akordeon wykonany w jQuery',
                    'image' => url( '/img/jquery.webp' ),
                    'github' => 'https://github.com/KamilNiegowski/jQuery_accordion'
                ],
                [
                    'category' => [ 'C++', 'Arduino' ],
                    'title' => 'Radar wykonany w Arduino',
                    'image' => url( '/img/arduino_radar.webp' ),
                    'github' => 'https://github.com/KamilNiegowski/radar_arduino'
                ],
                [
                    'category' => [ 'Python' ],
                    'title' => 'Bot zmieniający alt-tagi zdjęć',
                    'image' => url( '/img/python.webp' ),
                    'github' => 'https://github.com/KamilNiegowski/change_alt_images'
                ],
            ];
            
            $this->tabs = array_unique( Arr::flatten( Arr::pluck( $this->items, 'category' ) ) );
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return View|Closure|string
         */
        public function render()
        {
            return view( 'components.home.portfolio' );
        }
    }
