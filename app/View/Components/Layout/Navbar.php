<?php

    namespace App\View\Components\Layout;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class Navbar extends Component
    {
        public array $navigationItems = [];

        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->navigationItems = [
                [ 'label' => 'Strona główna', 'href' => '/' ],
                [ 'label' => 'O mnie', 'href' => '#about' ],
                [ 'label' => 'Projekty', 'href' => '#portfolio' ],
                [ 'label' => 'Kontakt', 'href' => '#contact' ]
            ];
        }

        /**
         * Get the view / contents that represent the component.
         *
         * @return View|Closure|string
         */
        public function render()
        {
            return view( 'layout.navbar' );
        }
    }
