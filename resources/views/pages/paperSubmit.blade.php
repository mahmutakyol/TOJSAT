@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span>Paper Submit</h2>
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

                    <form class="form-horizontal" role="form" method="POST" action="/paperSubmit" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Type</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Scope</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="scope" value="{{ old('scope') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Abstract</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea class="form-control" rows="5" name="abstract"></textarea>
                                <span class="help-block">abstract</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Keywords</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="keywords">
                                <span class="help-block">you must input keyword this format: keyword, keyword, keyword </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Authors</label>
                            <div class="col-md-9">
                                <select class="form-control select" data-live-search="true" name="authors">

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-7 control-label">
                                <input type="file" multiple id="file-simple" name="file"/>
                            </div>
                        </div>

                        <div class="panel-footer" style="background-color: #ffffff">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
