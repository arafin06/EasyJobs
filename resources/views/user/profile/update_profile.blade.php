@extends('user.master')



@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('update-profile', ['id' => Session::get('userId')])}}" method="post" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$user->fname}}"  name="fname" class="form-control"/>
                                <input type="hidden" name="id" value="{{Session::get('userId')}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$user->lname}}"  name="lname" class="form-control"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$user->email}}"  name="email" class="form-control"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Skils</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$user->skills}}"  name="skills" class="form-control"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Profile Picture</label>
                            <div class="col-md-9">
                                <input type="file"value="{{$user->image}}" name="image" accept="image/*"/>

                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">CV</label>
                            <div class="col-md-9">
                                <input type="file"value="{{$user->cv}}" name="cv" accept="image/*"/>

                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-9">
                                <input type="hidden"value="{{$user->password}}" name="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update"/>
                            </div>
                        </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection