<?php

    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class PortfolioItem extends Component
    {
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct( public string $title, public array $categories, public string $image, public string $github )
        {
            //
        }

        /**
         * Get the view / contents that represent the component.
         *
         * @return View|Closure|string
         */
        public function render()
        {
            return view( 'components.portfolio-item' );
        }
    }
