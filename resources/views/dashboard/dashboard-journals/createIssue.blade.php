@extends('dashboard.home')

@section('body')
    <div class="col-md-12">
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

                    <form class="form-horizontal" role="form" method="POST" action="/admin/createIssue" enctype="multipart/form-data" files="true">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Volume</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="volume" value="{{ old('title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Issue</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="issue" value="{{ old('type') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Year</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="year" value="{{ old('scope') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Message Editor In Chief</label>
                            <div class="col-md-6 col-xs-12">
                                <textarea class="form-control" rows="5" name="message_e_c"></textarea>
                                <span class="help-block">abstract</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Message Editors </label>
                            <div class="col-md-6 col-xs-12">
                                <textarea class="form-control" rows="5" name="message_e"></textarea>
                                <span class="help-block">abstract</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Cover Image</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" class="fileinput btn-primary" name="cover_image" id="filename" title="Browse file"/>
                                <span class="help-block">Input type file</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Full PDF</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="file" class="fileinput btn-primary" name="full_pdf" id="filename" title="Browse file"/>
                                <span class="help-block">Input type file</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Status</label>
                            <div class="col-md-6 col-xs-12">
                                <select name="status" class="form-control select">
                                    @foreach($status as $statu)
                                    <option value="{{ $statu->id }}">{{ $statu->name }}</option>
                                    @endforeach
                                </select>
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


