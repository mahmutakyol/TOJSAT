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
    <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Journal Settings</span></a>
    <ul>
        <li><a href="/admin/journalList">Journal List</a></li>
        <li><a href="/admin/createIssue">Create Issue</a></li>
    </ul>
</li>
<li class="xn-openable">
    <a href="#"><span class="fa fa-book"></span> <span class="xn-text">Article Settings</span></a>
    <ul>
        <li><a href="layout-boxed.html">Article List</a></li>
        <li><a href="layout-boxed.html">Register Article</a></li>
    </ul>
</li>
