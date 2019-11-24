<?php

namespace App\Http\Controllers;

use App\Apply;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function newUser(Request $request)
    {

        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->skills = 'null';
        $user->image = 'null';
        $user->cv = 'null';

        $user->save();



        return redirect('/')->with('message', 'User Registration Completed, Please Login' );
    }


    public function loginUser(Request $request){

        $user= User::where('email', $request->email)->first();
        if($user){
            if (password_verify($request->password, $user->password)){
                Session::put('userId', $user->id);
                Session::put('userName', $user->fname.' '.$user->lname);
                return redirect('profile')->with('message', 'Incorrect word' );
            }
            else{
                return redirect('/')->with('message', 'Incorrect Password' );
            }

        }
        else{
            return redirect('/')->with('message', 'Incorrect Email, Please registrer first' );
        }
    }


    public function profile(){


        $user = User::find(Session::get('userId'));
        return view('user.profile.profile',[
            'user'=>$user,

        ]);

    }

    public function jobs(){
        $job= Job::all();
        return view('user.jobs.jobs',[
            'jobs'=>$job
        ]);
    }

    public function userLogout(){
        Session::forget('userId');
        Session::forget('userName');

        return redirect('/');
    }

    public function editProfile($id){
        $user= User::find($id);
        return view('user.profile.update_profile',[
            'user'=>$user
        ]);

    }

    public function updateProfile(Request $request){

        $image = $request->file('image');
        $directory = "image/";
        $imageName = $image->getClientOriginalName();
        $image->move($directory,$imageName);
        $imageUrl = $directory.$imageName;


        $cv = $request->file('cv');
        $directory = "cv/";
        $cvName = $cv->getClientOriginalName();
        $cv->move($directory,$cvName);
        $cvUrl = $directory.$cvName;


        $user=User::find($request->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->skills = $request->skills;
        $user->image = $imageUrl;
        $user->cv = $cvUrl;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('profile')->with('massage', 'Profile updated Successfully');

    }

    public function apply(Request $request){
        $apply= new Apply();

        $user= User::where('id', $request->userId)->first();

        if($user->cv != 'null') {

            $apply->user_id = $request->userId;
            $apply->job_id = $request->jobId;
            $apply->companyId = $request->companyId;
            $apply->title = $request->title;
            $apply->email = $user->email;
            $apply->cv = $user->cv;

            $apply->save();

            return redirect('jobs')->with('massage', 'Applied Successfully');
        }
        else{
            return redirect('profile')->with('massage', 'Please Add your CV first');

        }
    }
}
