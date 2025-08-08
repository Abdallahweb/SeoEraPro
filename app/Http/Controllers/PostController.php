<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $user_id = $user->id;
        $Post =  Post::where('user_id', $user_id)->latest()->paginate(3);
        return view('posts.posts', compact('Post'));
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
    public function store(Request $request)
    {

        $user = \Illuminate\Support\Facades\Auth::user();


          $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:2048'],
            'mobile' => ['required', 'numeric', 'digits:11'],
        ]);

        $New_Post = Post::create([
            'title' => $request->title,
            'description' => htmlspecialchars($request->description),
            'mobile' => $request->mobile,
            'user_id' => $user->id


        ]);


        toastr()->closeButton()->timeOut(5000)->addSuccess($New_Post->title . " " . ' Added Successfully.');
        return redirect(route('view_posts'));


    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $Post =  Post::latest()->paginate(6);
        $Count =  Post::count();
       $User_Name = User::all();
    //    ; \Illuminate\Support\Facades\DB::table('users')->join('posts', 'users.id', '=', 'posts.user_id')->select('users.name')->get();
        return view('welcome', compact('Post','User_Name', 'Count'));
    }


    public function author(string $id)
    {
        $Post =  User::find($id)->post()->latest()->paginate(6);
        $User_Name =  User::find($id)->name;
        return view('author', compact('Post','User_Name'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_post = Post::find($id);

        return view('posts.edit_post', compact('edit_post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {


        $request->validate([
              'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string','max:2048'],
            'mobile' => ['required', 'numeric', 'digits:11'],
        ]);


        $update_post = Post::find($id);
        $update_post->title = $request->title;
        $update_post->description =  htmlspecialchars($request->description);
        $update_post->mobile = $request->mobile;


        $update_post->save();
       toastr()->closeButton()->timeOut(5000)->addSuccess($update_post->title . " " . ' Updated Successfully.');
        return redirect(route('view_posts'));

    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id , string $title)
    {
        $delete_post =  Post::find($id)->delete();

        toastr()->closeButton()->timeOut(5000)->addSuccess($title . " " . ' Deleted Successfully.');

        return redirect()->back();
    }


}
