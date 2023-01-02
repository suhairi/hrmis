
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>MADA - BPIP - HRMIS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<!--     <link rel="apple-touch-icon" href="{{ URL::asset('img/favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ URL::asset('img/favicons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ URL::asset('img/favicons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ URL::asset('img/favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ URL::asset('img/favicons/safari-pinned-tab.svg') }}" color="#712cf9"> -->
    <link rel="icon" href="{{ URL::asset('img/favicon.ico') }}">
    <meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/sidebars.css') }}" rel="stylesheet">
  </head>

  <body>   

  <main class="d-flex flex-nowrap">

    <!-- <div class="b-example-divider b-example-vr"></div> -->

    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
      <a href="{{ route('home') }}" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-5 fw-semibold">Menu Utama</span>
      </a>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              @can('product-create')
                <li><a href="{{ route('products.index') }}" class="link-dark d-inline-flex text-decoration-none rounded">Products</a></li>
              @endcan
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Orders
          </button>
          <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#settings-collapse" aria-expanded="false">
            Settings
          </button>
          <div class="collapse" id="settings-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              @can('role-create')
              <li><a href="{{ route('users.index') }}" class="link-dark d-inline-flex text-decoration-none rounded">Users</a></li>
              @endcan
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Roles</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Departments</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Holidays</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Holidays</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
          <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Account
          </button>
          <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
              <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
              <li>
                <a class="link-dark d-inline-flex text-decoration-none rounded" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout')  }} - {{ Auth::user()->name }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <div class="b-example-divider b-example-vr"></div>

    <div class="container p-3">
      @yield('content')
    </div>

  </main>



    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/sidebars.js') }}"></script>

  </body>
</html>
