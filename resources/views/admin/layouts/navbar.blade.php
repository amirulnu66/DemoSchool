 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{URL::to('/admin/dashboard')}}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>



                  <li class="sub-menu">
                      <a href="{{URL::to('/admin/teachers/message/show')}}" >
                          <i class="fa fa-users"></i>
                          <span>Chairman & H'Teacher</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Managing Committee </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/member/create')}}">Create Member</a></li>
                          <li><a  href="{{URL::to('/admin/member/show')}}">Manage Members</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/page/create')}}">Create Page</a></li>
                          <li><a  href="{{URL::to('/admin/page/show')}}">Page List</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sliders"></i>
                          <span>Home Slider</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/slider/create')}}">Create Slide</a></li>
                          <li><a  href="{{URL::to('/admin/slider/show')}}">Slider Edit</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-money"></i>
                          <span>Academic Fees</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/academic/fees/create')}}"> Create Fees</a></li> 

                          <li><a  href="{{URL::to('/academic/fees/list')}}"> Fees List</a></li> 
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-envelope-open"></i>
                          <span>Contact Page</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/contact/create/add')}}"> Contact Page</a></li> 

                          <li><a  href="{{URL::to('/admin/contact/show')}}"> Contact Edit</a></li> 
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Public Exam Result</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{url('/admin/public/result/create')}}">Create Public Result</a></li>
                          <li><a  href="{{url('/admin/public/result/ssc/list')}}">SSC Exam Result List</a></li>
                          <li><a  href="{{url('/admin/public/result/jsc/list')}}">JSC Exam Result List</a></li>
                      </ul>
                  </li>
                    <li class="sub-menu">
                      <a href="{{URL::to('/admin/subscribe/show')}}" >
                          <i class="fa fa-address-book"></i>
                         <span>Subscriber</span>
                      </a>
                     
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th-list"></i>
                          <span>Gallery </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/blog/create')}}">Create Gallery</a></li>
                          <li><a  href="{{URL::to('/admin/blog/show')}}">Galllery List</a></li>
                      </ul>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-file"></i>
                          <span>File Import</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/filedownloads/create')}}">Create File</a></li>
                          <li><a  href="{{URL::to('/admin/filedownloads/show')}}">File Import List</a></li>
                      </ul>
                  </li>
                 
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-question"></i>
                          <span>FAQ</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/faq/create')}}">Create Faqs</a></li>
                          <li><a  href="{{URL::to('/admin/faq/show')}}">Faqs List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-list"></i>
                          <span>Mission-Vision</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/mission/vision/create')}}">Create Mission-Vision</a></li>
                          <li><a  href="{{URL::to('/admin/mission/vision/show')}}">Mission-Vision Edit</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>School Sports</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/sports/create')}}">Create sports</a></li>
                          <li><a  href="{{URL::to('/admin/sports/show')}}">Sports List</a></li>
                      </ul>
                  </li>

                  
                    <li class="sub-menu">
                      <a href="{{URL::to('/admin/message/show')}}" >
                          <i class="fa fa-envelope"></i>
                         <span>Public mailbox</span>
                      </a>
                     
                  </li>
                  
                  <li class="sub-menu">
                      <a href="{{URL::to('/admin/institute/setting/edit')}}" >
                          <i class="fa fa-cog"></i>
                          <span>Settings</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('/admin/users/create')}}">User Create</a></li>
                          <li><a  href="{{URL::to('/admin/users/show')}}">User List</a></li>
                      </ul>
                  </li>
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->