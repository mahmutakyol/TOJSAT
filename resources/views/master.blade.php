<!DOCTYPE html>
<html lang="en">
<head>

    <title>TOJSAT-The Online Journal of Science and Technology</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <?php

        $site_name = [
            'TOJSAT' => 'default',
            'TOJET' => 'dark',
            'TOJNED' => 'forest',
            'TOJDEL' => 'light',
            'TOJQIH' => 'night',
            'TOJCAM' => 'serenity'
        ];


        echo '<link rel="stylesheet" type="text/css" id="theme" href="css/theme-'.$site_name['TOJSAT'].'.css"/>';

    ?>

</head>
<body class="page-container-boxed">
<div class="page-container">

    @include('components.menu')

    <div class="page-content">

        @include('components.nav')

        @yield('pageHeader')

        <div class="page-content-wrap">
            <div class="row">

                @yield('body')
                @include('components.rightPanel')

            </div>
        </div>
    </div>

</div>

@include('components.logout')

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/plugins/fileinput/fileinput.min.js"></script>
<script type="text/javascript" src="js/plugins/filetree/jqueryFileTree.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/actions.js"></script>

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
            script: 'assets/filetree/jqueryFileTree.php',
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
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        var link = target.src ? target.parentNode : target;
        var options = {index: link, event: event,onclosed: function(){
            setTimeout(function(){
                $("body").css("overflow","");
            },200);
        }};
        var links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>
<!-- END SCRIPTS -->


</body>
</html>






