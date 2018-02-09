<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function notice(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $posts = Post::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->Where('category_id', '1')
                ->paginate($perPage);
        } else {
            $posts = Post::Where('category_id', '1')->paginate($perPage);
        }

        return view('notice', compact('posts'));
    }

    public function activity(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 40;

        if (!empty($keyword)) {
            $posts = Post::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->Where('category_id', '2')
                ->paginate($perPage);
        } else {
            $posts = Post::Where('category_id', '2')->paginate($perPage);
        }

        return view('activity', compact('posts'));
    }


    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 40;

        if (!empty($keyword)) {
            $post = Post::where('title', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $post = Post::paginate($perPage);
        }

        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->pluck('name', 'id');

        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $path = 'uploads/sistema/';
        $file = Input::file('image');
        $archivo = $path.$file->getClientOriginalName();
        $upload = $file->move($path, $archivo);

        if($upload)
        {
            $inputs=Input::All();

            /**
             * Esta es la funcion para validar de manera manual
             */
            $validator = Validator::make($inputs, [
                'title' => 'required',
                'content' => 'required',
                'category_id' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect('admin/post/create')->withErrors($validator)->withInput();
            }

            $n= new Post;
            $n->title=$inputs["title"];
            $n->content=$inputs["content"];
            $n->category_id=$inputs["category_id"];
            $n->image= $archivo;
            $user = Auth::user();
            $n->user_id = $user->id;
            $n->save();

            //Session::flash('mensaje', 'su registro se ingresó correctamente');
            // return Redirect::to('admin/product');
            return redirect('admin/post')->with('message', 'Post Agregado Correctamente!');
        }else
        {
            // Session::flash('mensaje', 'no se pudo subir el archivo');
            return Redirect::to('admin/post')->with('message', 'no se pudo subir el archivo!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.show', compact('post'));
    }

    public function showNotice($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::paginate(10);

        return view('noticeSingular', compact('post', 'posts'));
    }

    public function showActivity($id)
    {
        $post = Post::findOrFail($id);
        $posts = Post::paginate(10);
        return view('activitySingular', compact('post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $post = Post::findOrFail($id);
        $post->update($requestData);

        return redirect('admin/post')->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('admin/post')->with('flash_message', 'Post deleted!');
    }
}
