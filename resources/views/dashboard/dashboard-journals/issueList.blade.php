@extends('dashboard.home')

@section('body')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Issues </h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Default</h3>
                <ul class="panel-controls">
                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Volume</th>
                        <th>Issue</th>
                        <th>Year</th>
                        <th>Status</th>
                        <th>PDF</th>
                        <th>Articles</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($submissions as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->paper_title}}</td>
                            <td>{{$s->volume}}</td>
                            <td>{{$s->issue}}</td>
                            <td>{{$s->created_at}}</td>
                            <td>Status</td>
                            <td>PDF</td>
                            <td>Articles</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END DEFAULT DATATABLE -->
        <!-- END DEFAULT DATATABLE -->
    </div>
@endsection


