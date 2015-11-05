<li class="xn-title">General</li>
<li class="active">
    <a href="/admin/dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
    <ul>
        @foreach(DB::table('menus')->where('editable', 1)->orderBy('id', 'asc')->get() as $menus)
            <li><a href="{{ $menus->dashboard_url }}"><span class="{{ $menus->icon_name }}"></span> {{ $menus->name }}</a></li>
        @endforeach
        <li class="xn-openable">
            <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
            <ul>
                <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
            <ul>
                <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-file"></span> Blog</a>

            <ul>
                <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-sign-in"></span> Login</a>
            <ul>
                <li><a href="pages-login.html">App Login</a></li>
                <li><a href="pages-login-website.html">Website Login</a></li>
                <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
            </ul>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
            <ul>
                <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                <li><a href="pages-error-500.html"> Error 500</a></li>
            </ul>
        </li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-user"></span> <span class="xn-text">User Settings</span></a>
    <ul>
        <li><a href="layout-boxed.html"><span class="fa fa-suitcase"></span>Authorization</a></li>
        <li><a href="layout-nav-toggled.html"><span class="fa fa-check"></span>Registration</a></li>
        <li><a href="layout-nav-top.html">Navigation Top</a></li>
        <li><a href="layout-nav-right.html">Navigation Right</a></li>
        <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
        <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
        <li><a href="layout-frame-left.html">Frame Left Column</a></li>
        <li><a href="layout-frame-right.html">Frame Right Column</a></li>
        <li><a href="layout-search-left.html">Search Left Side</a></li>
        <li><a href="blank.html">Blank Page</a></li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Article Settings</span></a>
    <ul>
        <li><a href="layout-boxed.html">Authorization</a></li>
        <li><a href="layout-nav-toggled.html">Registration</a></li>
        <li><a href="layout-nav-top.html">Navigation Top</a></li>
        <li><a href="layout-nav-right.html">Navigation Right</a></li>
        <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
        <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
        <li><a href="layout-frame-left.html">Frame Left Column</a></li>
        <li><a href="layout-frame-right.html">Frame Right Column</a></li>
        <li><a href="layout-search-left.html">Search Left Side</a></li>
        <li><a href="blank.html">Blank Page</a></li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Journal Settings</span></a>
    <ul>
        <li><a href="layout-boxed.html">Authorization</a></li>
        <li><a href="layout-nav-toggled.html">Registration</a></li>
        <li><a href="layout-nav-top.html">Navigation Top</a></li>
        <li><a href="layout-nav-right.html">Navigation Right</a></li>
        <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
        <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
        <li><a href="layout-frame-left.html">Frame Left Column</a></li>
        <li><a href="layout-frame-right.html">Frame Right Column</a></li>
        <li><a href="layout-search-left.html">Search Left Side</a></li>
        <li><a href="blank.html">Blank Page</a></li>
    </ul>
</li>
