<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\PostBlog;
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use Illuminate\View\View;
    
    class PostBlogController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index(): View
        {
            $posts = PostBlog::query()
                ->where( 'active', '=', 1 )
                ->whereDate( 'published_at', '<=', Carbon::now() )
                ->orderBy( 'published_at', 'desc' )
                ->paginate( 6 );
            
            return view( 'components.blog.blog', compact( 'posts' ) );
        }
        
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }
        
        /**
         * Store a newly created resource in storage.
         */
        public function store( Request $request )
        {
            //
        }
        
        /**
         * Display the specified resource.
         */
        public function show( PostBlog $postBlog )
        {
            //
        }
        
        /**
         * Show the form for editing the specified resource.
         */
        public function edit( PostBlog $postBlog )
        {
            //
        }
        
        /**
         * Update the specified resource in storage.
         */
        public function update( Request $request, PostBlog $postBlog )
        {
            //
        }
        
        /**
         * Remove the specified resource from storage.
         */
        public function destroy( PostBlog $postBlog )
        {
            //
        }
    }
