<?php

    namespace App\View\Components;

    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;

    class Button extends Component
    {
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct( public string $variant = 'primary' )
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
            return view( 'components.button' );
        }
    }
