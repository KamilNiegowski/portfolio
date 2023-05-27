<?php
    
    namespace App\View\Components\Home;
    
    use App\Models\Category;
    use Closure;
    use Illuminate\Contracts\View\View;
    use Illuminate\View\Component;
    
    
    class Portfolio extends Component
    {
        public $projects;
        public array $tabs = [];
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->projects = app()->make( 'App\Http\Controllers\ProjectController' )->index();
            
            $this->tabs = Category::pluck( 'title' )->unique()->toArray();
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
