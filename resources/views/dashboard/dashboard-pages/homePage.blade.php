@extends('dashboard.home')

@section('body')
    <div class="page-title">
        <h2><span class="fa fa-arrow-circle-o-left"></span> {{ $name }} </h2>
    </div>
    <!-- END PAGE TITLE -->

    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">

        <form class="form-horizontal" role="form" method="POST" action="homePage">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">

                    <div class="block">
                        <textarea class="summernote" name="content">
                            {{ $content }}
                        </textarea>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection