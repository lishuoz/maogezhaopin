<div class="container">
  <nav class="nav">
    <div class="nav-left">
      <a class="nav-item" href="{{ url('/') }}">
        <img src="/img/logo.png" alt="猫哥招聘 logo">
      </a>
    </div>

    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
    <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <!-- This "nav-menu" is hidden on mobile -->
    <!-- Add the modifier "is-active" to display it on mobile -->
    <div class="nav-right nav-menu">
      <span class="nav-item">
        <a class="button is-primary" href="{{ url('/jobs/create') }}">
          <span class="icon">
            <i class="fa fa-address-card-o"></i>
          </span>
          <span>免费发布招聘信息</span>
        </a>
      </span>
      <span class="nav-item">
       @if (Auth::guest())
       <a class="nav-item" href="{{ url('/login') }}" >登陆</a>
       <a class="nav-item" href="{{ url('/register') }}">注册</a>
       @else
       <a class="nav-item" href="{{ url('/home') }}">
         {{ Auth::user()->name }}
       </a>
       <a class="nav-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
        <span>退出登录</span>
      </a>
      @endif
    </span>
  </div>
</nav>
</div>