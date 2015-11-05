@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span> Join Us </h2>
    </div>
@endsection

@section('body')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="post-item">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Surname</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-3">
                                <select name="title_id" class="form-control select">
                                    @foreach($titles as $title)
                                        <option  value="{{ $title->id }}">{{ $title->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Organization</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="organization" value="{{ old('organization') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-3">
                                <select name="country_id" class="form-control select">
                                    @foreach($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->short_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('rightPanel')

    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="image/tasetTV.png" alt="TasetTV" width="200"/>
            </div>
        </div>

        <ul class="x-navigation x-navigation-horizontal x-navigation-panel"
            style="border-radius: 5px; margin-top:-15px;margin-bottom: 5px; background-color: transparent">

            <li class="xn-search">
                <form role="form" method="get">
                    <input type="text" name="search" placeholder="Search..."
                           style="background-color: white; border-color: white"/>
                </form>
            </li>

        </ul>
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Current Issue</h3>

                <div class="links" align="center">

                    <a href="#">Volume 5 - Issue 2<span class="label label-default">5</span>
                        <img src="image/cover-v05-i01-small.png" alt="TOJSAT" width="150"/>
                    </a>


                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Archives</h3>

                <div class="links">
                    <a href="#">Volume 5 - Issue 1 <span class="label label-default">12</span></a>
                    <a href="#">Volume 4 - Issue 4 <span class="label label-default">11</span></a>
                    <a href="#">Volume 4 - Issue 3 <span class="label label-default">15</span></a>
                    <a href="#">Volume 4 - Issue 2 <span class="label label-default">17</span></a>
                    <a href="#">Volume 4 - Issue 1 <span class="label label-default">13</span></a>
                    <a href="#">Volume 3 - Issue 4 <span class="label label-default">12</span></a>
                </div>
            </div>
        </div>
    </div>

@endsection