<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
    </li>
    <li class="xn-icon-button pull-left">
        <h5 style="color: #FFFFFF">The Online Journal of Science and Technology</h5>
        <h6 style="color: #FFFFFF">ISSN 2146-7390</h6>
    </li>
    <li class="xn-icon-button pull-right">
        <div class="block">
            @if(Auth::guest())
                <form class="form-inline" role="form" action="/auth/login" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="sr-only">Login</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail" />
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Your password"/>
                    </div>
                    <button type="submit" class="btn btn-success fa fa-sign-in"></button>
                    <input type="button" class="btn btn-danger" value="Create Account" onclick="window.location='/joinus';">
                </form>
            @else
                <form class="form-inline" role="form">
                    <div class="form-group" style="color: #ffffff">
                        <h5 style="color: #ffffff; margin-right: 5px"> Welcome {{ Auth::user()->name }} </h5>
                    </div>
                    <input type="button" class="btn btn-danger" value="Sign Out" onclick="window.location='/auth/logout ';">
                </form>
        </div>
            @endif
    </li>
</ul>