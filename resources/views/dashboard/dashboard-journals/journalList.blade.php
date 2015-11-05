@extends('dashboard.home')

@section('body')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> Journals </h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-body panel-body-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>ISSN</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sites as $key => $site)
                                <tr>
                                    <form role="form" method="get">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <td><a href="issueList/{{$site->id}}">{{$site->site_code }}</a></td>
                                    </form>
                                    <td>{{$site->site_name}}</td>
                                    <td>{{$site->siteissn}}</td>
                                    <td><a href="{{$site->site_address}}" target="_blank">{{$site->site_address}}</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection