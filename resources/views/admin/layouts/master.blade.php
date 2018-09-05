<!DOCTYPE html>
<html lang="en">

     @include('admin.layouts.header')

  <body>

  <section id="container">
      <!--header start-->
       @include('admin.layouts.mainheader')
        @include('admin.layouts.navbar')
      <!--main content start-->
      <section id="main-content">
            @yield('content')
      </section>
      <!--main content end-->


      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 &copy; Venus IT LTD.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    @include('admin.layouts.script')

  </body>
</html>
