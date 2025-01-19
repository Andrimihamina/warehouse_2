<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    {{-- SIDE BAR --}}
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            {{-- PICTURES LOGO --}}
            <li class="nav-item mr-auto">
                <a class="navbar-brand">
                 <img src="{{ asset('../images/logo.jpg') }}" alt="Logo-AGOGOLINES" height="43">
                </a>
            </li>

            {{-- FIXATION BOUTTON --}}
            <li class="nav-item">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block  toggle-icon  fa fa-circle" style="font-size: 10px"></i>
                </a>
            </li> 
        </ul>
    </div>

    <div class="shadow-bottom"></div>
    
    <div class="main-menu-content">
        {{-- Main Menu --}}
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach($menuItems as $item)
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="{{ $item->url }}">
                        <i class="{{ $item->icon }}"></i>
                        <span class="menu-title text-truncate cursor-pointer">
                            {{ $item->name }}
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>