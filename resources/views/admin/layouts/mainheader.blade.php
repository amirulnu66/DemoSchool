      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <a href="{{URL::to('/admin/dashboard')}}" class="logo"> 
                <img src="{{URL::to('asset/logos/fevi.png')}}" alt="" width="26" height="26">ABC <span> School</span>
            
            </a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->

                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
  
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="">
                            <span class="username">{{Auth::user()->name}}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                           

                            <li><a href="{{ route('logout') }}"   onclick="
                                                    event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> Log Out</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                    </li>
                        </ul>
                    </li>
                    <!-- <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li> -->
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->