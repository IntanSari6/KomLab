<!DOCTYPE html>
<html lang="en">
    
    @include ('layouts.head')
   
<body>
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> --}}
        </div>

        @include ('layouts.navbar')
        @include ('layouts.sidebar')

        <div class="content-wrapper">
            <br>

    <!-- Main content -->
   @include('dashboard.beranda')
    <!-- /.content -->
  </div>


        @include ('layouts.footer')

        <aside class="control-sidebar control-sidebar-dark">
    
        </aside>
    </div>
    @include ('layouts.script') 
</body>
</html>