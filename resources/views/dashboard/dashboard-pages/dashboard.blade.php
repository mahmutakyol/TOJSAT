@extends('dashboard.home')

@section('body')
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
        @include('dashboard.dashboard-components.widgets')
        @include('dashboard.dashboard-components.elements')
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
@endsection