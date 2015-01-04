<html>
<head>
  {{ HTML::style('css/skeleton.css'); }}
  {{ HTML::style('css/normalize.css'); }}
  {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css'); }}
  {{ HTML::style('css/screen.css'); }}
  @yield('title')
</head>
<body>

  <section class="header">
    <div class="container">
      <div class="row">
        <div class="four columns">
          <h3>BOXLY</h3>
        </div>
        <div class="twelve columns">
          <ul>
            <li><i class="fi-torsos-all"></i><span>Clients</span></li>
            <li><i class="fi-eye"></i><span>Sitters</span></li>
            <li><i class="fi-torso"></i><span>Admin</span></li>
            <li><i class="fi-graph-bar"></i><span>Reports</span></li>
            <li><i class="fi-star"></i><span>Functions</span></li>
            <li><i class="fi-key"></i><span>Keys</span></li>
            <li><i class="fi-clipboard"></i><span>Accounting</span></li>
            <li><i class="fi-torsos"></i><span>New Client</span></li>
            <li><i class="fi-alert"></i><span>Alerts</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="container content">

      @yield('content')

    </div>
  </div>
</body>
</html>
