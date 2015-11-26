@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span> Authors </h2>
    </div>
@endsection

@section('body')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="post-item">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <div class="panel-body panel-body-table">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Posts</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Last Issue Subscriptions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key => $user)
                                            @if($user->is_authors === 1)
                                                <tr>
                                                    <td>{{$user->posts}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->surname}}</td>
                                                    <td><button type="button" class="btn btn-success btn-xs">{{$user->posts}}</button></td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

