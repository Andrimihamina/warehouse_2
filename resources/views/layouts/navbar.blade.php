<nav id="dynamic-app-nav"  style="margin-top: 10px !important; " class="header-navbar shadow navbar navbar-expand-lg align-items-center floating-nav container-xxl">
    <div  class="navbar-container d-flex  content">

       <ul class="nav navbar-nav align-items-center  ml-auto"> 

            @foreach($menuItems as $item)
                <li class="nav-item">
                    <a href="{{ $item->url }}" class="nav-link {{ request()->is(ltrim($item->url, '/')) ? 'active' : '' }}">
                        <i class="{{ $item->icon }}"></i>
                        <span class="user-name font-weight-bolder">{{ $item->name }}</span>
                    </a>
                </li>
            @endforeach

                <li class="nav-item dropdown dropdown-user">
                    <span class="user-name font-weight-bolder">
                        <i class="mr-50" data-feather="user"></i>
                        {{-- <span class="text-default mr-2">{{ Auth::user()->name ?? 'Utilisateur' }}</span> --}}
                    </span>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                    </a>
                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
                </li>
            
        </ul>
    </div>
</nav>