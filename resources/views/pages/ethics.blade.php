@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span> Ethics </h2>
    </div>
@endsection

@section('body')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="post-item">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </div>

@endsection