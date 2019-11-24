@extends('user.master')


@section('body')



    <h4 class="text-center"> @if($message=Session::get('message')) {{$message}} @endif</h4>

    <div class="row">

        <div class="col-md-7" style="margin-left: 20px">
            <h1 style="text-align: center;">{{$user->fname}} {{$user->lname}}</h1>
            <p style="font-size: medium">
                <br><h1>{{Session::get('massage')}}</h1><br>
            <b> Email  </b>                 : {{$user->email}}<br><br>


            <b> CV  </b>                 : <ul>
                                                <li>
                                                    <a href="{{$user->cv}}"></i> <span>CV</span></a>
                                                </li>
                                           </ul><br>


            <b> Skills </b>                 : {{$user->skills}}<br><br>


            </p>

        </div>


        <div class="col-md-3">
            {{--<h3> Credit: {{$credit->credit}} </h3>--}}
            <br>  <br>  <br>  <br>  <br>  <br>  <br>
            <img style="height: 300px; width: 250px " src="{{$user->image}}" alt="Please upload your picture">
        </div>


    </div>
    <div class="row">
        <ul >


            <li><a href="{{route('edit-profile', ['id' => Session::get('userId')])}}"><i ></i> <span>Update Profile</span></a></li>

        </ul>
    </div>



@endsection