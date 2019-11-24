@extends('company.master')


@section('body')
    <br/>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Post Jobs</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>{{Session::get('message')}}</h4>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('save-job')}}" method="post">
                        @csrf

                        <input type="hidden" name="companyId" value="{{Session::get('companyId')}}"/>
                        <input type="hidden" name="company_name" value="{{Session::get('companyName')}}"/>

                        <div class="form-group">
                            <label class="control-label col-md-3">Job Title</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Job Description</label>
                            <div class="col-md-9">
                                <input type="text" name="description" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Salary</label>
                            <div class="col-md-9">
                                <input type="text" name="salary" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Location</label>
                            <div class="col-md-9">
                                <input type="text" name="location" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Country</label>
                            <div class="col-md-9">
                                <input type="text" name="country" class="form-control"/>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Post Job"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection