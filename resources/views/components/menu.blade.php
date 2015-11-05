<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-profile">
            <a href="/" class="profile-mini">
                <img src="image/tojsatlogo.png" alt="TOJSAT"/>
            </a>
            <div class="profile">
                <div class="profile-image1">
                    <img src="image/tojsatlogo.png" alt="TOJSAT" width="200"/>
                </div>
            </div>
        </li>
        @foreach(DB::table('menus')->orderBy('id', 'asc')->get() as $menus)
        <li class="xn-openable1">
            <a href="{{ $menus->url }}"><span class="{{ $menus->icon_name }}"></span> <span class="xn-text">{{ $menus->name }}</span></a>
        </li>
        @endforeach

        @if (!Auth::guest())
            <li class="xn-openable1">
                <a href="settings/{{ Auth::user()->id }}"><span class="fa fa-cog"></span> <span class="xn-text">{{ Auth::user()->name }}' s Settings</span></a>
            </li>
        @endif
        @if(Auth::check())
            <li class="xn-openable1">
                <a href="paperSubmit"><span class="fa fa-book"></span> <span class="xn-text">Submit Paper</span></a>
            </li>
            @if(Auth::user()->is_admin === 1)
                <li class="xn-openable1">
                    <a href="admin/dashboard"><span class="fa fa-dashboard"></span> <span class="xn-text">Admin Page</span></a>
                </li>
            @endif
        @endif
    </ul>
</div>