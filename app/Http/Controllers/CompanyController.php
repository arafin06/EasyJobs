<?php

namespace App\Http\Controllers;

use App\apply;
use App\Company;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function newCompany(Request $request){

        $company= new Company();
        $company->fname = $request->fname;
        $company->lname = $request->lname;
        $company->bname = $request->bname;
        $company->email = $request->email;
        $company->password = bcrypt($request->password);

        $company->save();

        return redirect('/')->with('message', 'Company Registration Completed, Please Login' );

    }

    public function loginCompany(Request $request){


        $company= Company::where('email', $request->email)->first();
        if($company){
            if (password_verify($request->password, $company->password)){
                Session::put('companyId', $company->id);
                Session::put('companyName', $company->bname);
                return redirect('dashboard');
            }
            else{
                return redirect('/')->with('message', 'Incorrect Password' );
            }

        }
        else{
            return redirect('/')->with('message', 'Incorrect Email, Please SignUp first' );
        }
    }

    public function dashboard(){

        $apply= apply::where('companyId', Session::get('companyId'))->get();



        return view('company.dashboard.main',[
            'applies'=> $apply
        ]);
    }

    public function postJob(){
        return view('company.jobs.post_job');
    }

    public function saveJob(Request $request){

        $job= new Job();

        $job->companyId = $request->companyId;
        $job->company_name = $request->company_name;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->country = $request->country;

        $job-> save();

        return redirect('post-job')->with('message', 'Job Added Successfully' );
    }

    public function companyLogout(){
        Session::forget('companyId');
        Session::forget('companyName');

        return redirect('/');
    }
}
