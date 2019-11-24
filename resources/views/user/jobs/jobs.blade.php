@extends('user.master')



@section('body')
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Department</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <h1>{{Session::get('massage')}}</h1>
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Company name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Salary</th>
                            <th>Location</th>
                            <th>Country</th>
                            <th>Apply</th>
                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($jobs as $job)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$job->company_name}}</td>
                                <td>{{$job->title}}</td>
                                <td>{{$job->description}}</td>
                                <td>{{$job->salary}}</td>
                                <td>{{$job->location}}</td>
                                <td>{{$job->country}}</td>
                                <td>


                                    <form action="{{route('apply', ['id' => Session::get('userId')])}}" method="post">
                                        @csrf

                                        <input type="hidden" name="companyId" value="{{$job->companyId}}">
                                        <input type="hidden" name="jobId" value="{{$job->id}}">
                                        <input type="hidden" name="title" value="{{$job->title}}">
                                        <input type="hidden" name="userId" value="{{Session::get('userId')}}">

                                        <div >
                                            <div >
                                                <input type="submit" name="btn" class="btn btn-success btn-block" value="Apply"/>
                                            </div>
                                        </div>
                                    </form>
                                </td>

                            </tr>

                            </tbody>
                            <?php $i++; ?>
                        @endforeach
                    </table>
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection