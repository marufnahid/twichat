<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Post_Meta;
use App\Models\Postmeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()){
            return view('app');
        }else {
            return "You are login in.";
        }

    }

    public function savePost(Request $request)
    {
        if (Auth::check()){
            $status = $request->post('status');
            $userID = Auth::id();

            $post_data = [
                'status' => $status,
                'user_id' => $userID,
            ];

            $post_id = DB::table('posts')->insertGetId($post_data);

            $validatedData = $request->validate([
                'images.*' => 'image|max:4096', // Validate each uploaded file as an image file with a maximum size of 2MB
            ]);

            $images= [];

            if ($validatedData){
                foreach ($request->file('images') as $image){
                    $filename = hash('md5',$post_id) . "." . $image->getClientOriginalExtension();
                    $image->move(public_path('assets/images/post'), $filename);
                    $images[] = asset("assets/images/post/" .$filename);
                }
            }

            $meta_value = implode("|", $images);

            $postmeta_data = [
                'post_id' => $post_id,
                'meta_key' => 'post_images',
                'meta_value' => $meta_value,
            ];

            DB::table('postmetas')->insert($postmeta_data);

            return redirect()->route('home');

        }
    }


}
