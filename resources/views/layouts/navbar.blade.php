<nav id="dynamic-app-nav"  style="margin-top: 10px !important; " class="header-navbar shadow navbar navbar-expand-lg align-items-center floating-nav container-xxl">
    <div  class="navbar-container d-flex  content">

       <ul class="nav navbar-nav align-items-center  ml-auto"> 
            <li class="nav-item d-none d-lg-block">
            </li>  
            <li class="nav-item d-none d-lg-block">
            </li>  
            <li class="nav-item d-none d-lg-block">
            </li>  

            <li class="nav-item dropdown dropdown-user">
                <span class="user-name font-weight-bolder"><i class="mr-50" data-feather="user"></i>
                    <span class="text-default mr-2">  
                        
                    </span>
                </span>
            </li>

            <li class="nav-item">
                <a class=""  href="#" class="nav-link" 
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                </a>
                <form id="logout-form" action="#" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
        </ul>
    </div>
</nav>