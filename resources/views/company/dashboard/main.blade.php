@extends('company.master')

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

                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>SL No</th>

                            <th>Title</th>

                            <th>Email</th>
                            <th>CV</th>
                        </tr>
                        </thead>

                        <?php  $i=1;   ?>

                        @foreach($applies as $apply)
                            <tbody>

                            <tr>

                                <td>{{$i}}</td>
                                <td>{{$apply->title}}</td>
                                <td>{{$apply->email}}</td>
                                <td><ul>
                                        <li>
                                            <a href="{{$apply->cv}}"></i> <span>CV</span></a>
                                        </li>
                                    </ul></td>





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