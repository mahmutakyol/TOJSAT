@extends('master')

@section('pageHeader')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-right"></span> Guidelines </h2>
    </div>
@endsection

@section('body')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body posts">
                <div class="post-item">
                    {!! $content !!}
                    <a href="../../../source/pdf/v03i02-02.pdf" target="_blank"> PDF </a>
                </div>
            </div>
        </div>
    </div>
@endsection

