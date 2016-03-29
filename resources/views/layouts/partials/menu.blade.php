<aside class="bg-black aside hidden-print" id="nav">

  <div class="clearfix text-center padder-v">
    <div class="inline">
      <div class="thumb-md">
        <img src="/images/a5.png" class="img-circle" alt="...">
      </div>
      <div class="h4 m-t m-b-xs hidden-nav-xs" id="nameOfuser">{{ Auth::user()->name }}</div>
      <small class="text-muted m-b hidden-nav-xs">Administrator</small>
    </div>
  </div>

  <section class="vbox">
    <section class="scrollable">
      <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
        <!-- nav -->
        <nav class="nav-primary hidden-xs">
          <ul class="nav" data-ride="collapse">
            <li class="divider"></li>
            <li class="{{ ($menu == 'home')? 'active': '' }}">
              <a href="{{ url('home') }}">
                <i class="icon-speedometer icon"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li >
              <a href="#" class="auto">
                <span class="pull-right text-muted">
                  <i class="fa fa-angle-left text"></i>
                  <i class="fa fa-angle-down text-active"></i>
                </span>
                <i class="icon-users icon">
                </i>
                <span>Users</span>
              </a>
              <ul class="nav dk text-sm bg-white">
                <li >
                  <a href="#" class="auto">
                    <i class="fa fa-angle-right text-xs"></i>
                    <span>All Users</span>
                  </a>
                </li>
                <li >
                  <a href="#" class="auto">
                    <i class="fa fa-angle-right text-xs"></i>
                    <span>Add New</span>
                  </a>
                </li>
              </ul>
            </li>
            <li >
              <a href="#" class="auto">
                <span class="pull-right text-muted">
                  <i class="fa fa-angle-left text"></i>
                  <i class="fa fa-angle-down text-active"></i>
                </span>
                <i class="icon-settings icon">
                </i>
                <span>Settings</span>
              </a>
              <ul class="nav dk text-sm bg-white">
                <li >
                  <a href="#" class="auto">
                    <i class="fa fa-angle-right text-xs"></i>
                    <span>General</span>
                  </a>
                </li>
                <li >
                  <a href="#" class="auto">
                    <i class="fa fa-angle-right text-xs"></i>
                    <span>Media</span>
                  </a>
                </li>
                <li >
                  <a href="#" class="auto">
                    <i class="fa fa-angle-right text-xs"></i>
                    <span>Themes</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- / nav -->
      </div>
    </section>
  </section>
</aside>
