<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //

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

    function index()
    {
        return view('app');
    }

    function saveProfile(Request $request)
    {

        if (Auth::check()) {
            $userID = Auth::id();

            $email = Auth::user()->email;
            $username = explode('@', $email);
            $fname = $request->post('fname');
            $lname = $request->post('lname');
            $bio = $request->post('bio');
            $location = $request->post('location');

//            $validatedData = $request->validate([
//                'profileimage.*' => 'image|max:4096', // Validate each uploaded file as an image file with a maximum size of 2MB
//                'coverimage.*' => 'image|max:4096', // Validate each uploaded file as an image file with a maximum size of 2MB
//            ]);


                $rules = [
                    'fname' => 'nullable',
                    'lname' => 'nullable',
                    'bio' => 'nullable',
                    'location' => 'nullable',
                ];

                $validatedData = $request->validate($rules);

                $post  = new UserMeta();






                        Usermeta::query()
                        ->where('user_id', $userID)
                        ->get();


                        return (DB::table('usermetas')->where('user_id','==', 1)->get());







//            $profileImage = $request->file('profileimage');
//            $profileImageName = hash('md5', $userID) . "." . $profileImage->getClientOriginalExtension();
//            $profileImage->move(public_path('assets/images/profile'), $profileImageName);
//            $profileImagePath = asset("assets/images/profile/" . $profileImageName);
//            $coverImage = $request->file('profileimage');
//            $coverImageName = hash('md5', $userID) . "." . $coverImage->getClientOriginalExtension();
//            $coverImage->move(public_path('assets/images/cover'), $coverImageName);
//            $coverImagePath = asset("assets/images/cover/" . $coverImageName);


        }
        return redirect()->route('profile');
    }
}
