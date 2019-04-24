<section class="hero is-link is-bold">
   <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
      <div class="container">
         <div class="navbar-brand">
            <a href="{{ url('/') }}" class="navbar-item">{{ config('Friday', 'Friday') }}</a>
            <span class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
            </span>
         </div>
         <div class="navbar-menu" id="navMenu">
            <div class="navbar-start"></div>
            <div class="navbar-end">
               @if (Auth::guest())
               <a class="navbar-item" href="{{ route('register') }}">Register</a>
               <a class="navbar-item" href="{{ route('login') }}">Login</a>
               @else
          
  <a class="navbar-item" href="/home">
                  Dashboard</a>
<a class="navbar-item" href="{{ route('image.upload') }}">
    Image Uploader</a>
               <div class="navbar-item">


                

                  <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  Logout, {{ Auth::user()->name }}</a>
               </div>


               <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                  {{ csrf_field() }}
               </form>
               <form id="logs-form" action="{{ route('register') }}" method="GET"
                  style="display: none;">
               {{ csrf_field() }}
            </div>
    
         </div>
         @endif
      </div>
      </div>
      </div>
   </nav>
   @yield('content')
</section>
<script src="{{ asset('js/app.js') }}"></script>
@section ('js')
<script type="text/javascript">
   $(function () {
       $('.navbar-burger').click(function () {
           $(".navbar-burger").toggleClass("is-active")
           $(".navbar-menu").toggleClass("is-active")
       })
   })
</script>
</body>
</html>