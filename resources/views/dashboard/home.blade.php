<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>TOJSAT-The Online Journal of Science and Technology</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="../../css/theme-default.css"/>
    <!-- EOF CSS INCLUDE -->
</head>
<body class="page-container-boxed">
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="/admin/dashboard">TOJSAT</a>
                <a href="#" class="x-navigation-control"></a>
            </li>
            <li class="xn-profile">
                <a href="#" class="profile-mini">
                    <img src="../../assets/images/users/avatar.jpg" alt="John Doe"/>
                </a>
                <div class="profile">
                    <div class="profile-image">
                        <img src="../../assets/images/users/avatar.jpg" alt="John Doe"/>
                    </div>
                    <div class="profile-data">
                        <div class="profile-data-name">{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>
                        <div class="profile-data-title">Web Developer/Designer</div>
                    </div>
                    <div class="profile-controls">
                        <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                        <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                    </div>
                </div>
            </li>
            @include('dashboard.dashboard-components.navigation')

        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        @include('dashboard.dashboard-components.x-vertical-nav')

        <!-- START BREADCRUMB -->
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Dashboard</li>
        </ul>
        <!-- END BREADCRUMB -->

      @yield('body')

    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Back to <strong>HOME</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to back to home page?</p>
                <p>Press No if you want to continue work.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="/" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="../../audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="../../audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script type="text/javascript" src="../../js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="../../bower_components/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type="text/javascript" src="../../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="../../js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="../../js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="../../js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="../../js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="../../js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='../../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script type='text/javascript' src='../../js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="../../js/plugins/owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="../../js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script>
<script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="../../js/plugins/codemirror/codemirror.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/xml/xml.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/javascript/javascript.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/css/css.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/clike/clike.js"></script>
<script type='text/javascript' src="../../js/plugins/codemirror/mode/php/php.js"></script>
<script type="text/javascript" src="../../js/plugins/summernote/summernote.js"></script>
<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="../../js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../../js/plugins/fileinput/fileinput.min.js"></script>
<script type="text/javascript" src="../../js/plugins/bootstrap/bootstrap-select.js"></script>

<script type="text/javascript" src="../../js/plugins/moment.min.js"></script>
<script type="text/javascript" src="../../js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->

<script type="text/javascript" src="../../js/plugins.js"></script>
<script type="text/javascript" src="../../js/actions.js"></script>

<script type="text/javascript" src="../../js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->

<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        enterMode: "keep",
        tabMode: "shift"
    });
    editor.setSize('100%','420px');
</script>

<script>
    $(function(){
        $("#file-simple").fileinput({
            showUpload: false,
            showCaption: false,
            browseClass: "btn btn-danger",
            fileType: "any"
        });
        $("#filetree").fileTree({
            root: '/',
            script: '../../assets/filetree/jqueryFileTree.php',
            expandSpeed: 100,
            collapseSpeed: 100,
            multiFolder: false
        }, function(file) {
            alert(file);
        }, function(dir){
            setTimeout(function(){
                page_content_onresize();
            },200);
        });
    });
</script>
<!-- END SCRIPTS -->
</body>
</html>






