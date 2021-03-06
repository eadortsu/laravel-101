<?php
    
    namespace App\Http\Controllers;
    
    use App\Post;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    
    class PostController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            return view('posts');
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('posts.create');
        }
        
        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
            $post = Post::create([
                "title" => $request->title,
                "body" => $request->body,
                "user_id" => Auth::user()->id,
                "image" => ""
            ]);
            
            return redirect()->route('posts.show',['post' => $post->id]);
        }
        
        /**
         * Display the specified resource.
         *
         * @param \App\Post $post
         * @return \Illuminate\Http\Response
         */
        public function show(Post $post)
        {
            //
            return view('posts.show',['post'=>$post]);
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param \App\Post $post
         * @return \Illuminate\Http\Response
         */
        public function edit(Post $post)
        {
            //
            return view('posts.edit',['post'=>$post]);
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param \App\Post $post
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Post $post)
        {
            //
            $post->update([
                "title" => $request->title,
                "body" => $request->body,
            ]);
    
            return redirect()->route('posts.show',['post' => $post->id]);
        }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param \App\Post $post
         * @return \Illuminate\Http\Response
         */
        public function destroy(Post $post)
        {
            //
            $post->delete();
             return redirect(route('home'));
        }
    }
