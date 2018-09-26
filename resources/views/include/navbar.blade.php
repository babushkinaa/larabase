{{--<nav class="navbar navbar-default">--}}
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}">
                <img alt="Brand" src="/src/LIB_sign.png" style="width: 35px">
                {{--<img alt="Brand" src="/src/LIB_sign.png">--}}
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        {{--<ul class="nav navbar-nav navbar-right">--}}

        <!-- Authentication Links -->
            @guest
                <ul class="nav navbar-nav navbar-right">
                    {{--<button type="button" class="btn btn-default" onClick='location.href="{{ route('login') }}"'>{{ __('Login') }}</button>--}}
                    {{--<button type="button" class="btn btn-default" onClick='location.href="{{ route('register') }}"'>{{ __('Register') }}</button>--}}
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('storage/'.Auth::user()->image)}}" width="30px" height="30px" class="img-circle">&nbsp;&nbsp;
                                    {{ Auth::user()->name .' '.Auth::user()->lastname }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('profile-form').submit();"> {{ __('Профиль') }}


                                            <form id="profile-form" action="{{ route('profile') }}" method="GET" style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                    @foreach(Auth::user()->roles as $role)
                                        @if($role->slug == 'Admin')
                                    <li><a href="{{ route('admin') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('admin-form').submit();"> {{ __('Админка') }}


                                            <form id="admin-form" action="{{ route('admin') }}" method="GET" style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"> {{ __('Выход') }}


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                        </ul>
        </div>
    </div>

</nav>
@guest

    @else
    @foreach(Auth::user()->roles as $role)
        @if($role->slug == 'Admin')
            <div class="container">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{route('admin')}}">Административный раздел</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
            </div>
            @endif
    @endforeach

    @endguest