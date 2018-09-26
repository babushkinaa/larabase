    <div class="col-md-4">
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <img class="img-circle" width="150" height="150" src="{{asset('storage/'.Auth::user()->image)}}">
        </div>
        <div class="col-md-5"></div>



        <div class="col-md-12">
            <h3>
                {{Auth::user()->name}}
                {{Auth::user()->lastname}}
            </h3>

            <h6>
                @foreach($roles as $role)
                    @if($role->slug == 'Admin')
                        {{$role->name}}
                        <br>
                        @break
                    @endif
                @endforeach
            </h6>
            <a href="{{route('editprofile',Auth::user()->id)}}">Редактировать профиль</a>                        <br>
        </div>
        <div class="col-md-12">
            {{--<ul class="list-group">--}}
            {{--<li class="list-group-item">Cras justo odio</li>--}}
            {{--<li class="list-group-item">Dapibus ac facilisis in</li>--}}
            {{--<li class="list-group-item">Morbi leo risus</li>--}}
            {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
            {{--<li class="list-group-item">Vestibulum at eros</li>--}}
            {{--</ul>--}}

        </div>
