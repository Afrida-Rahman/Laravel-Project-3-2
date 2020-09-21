<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          H M S
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{Request::is('admin/dashboard*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="{{Request::is('admin/slider*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('slider.index')}}">
            <i class="material-icons">slideshow</i>
              <p>All Slides</p>
            </a>
          </li>
          <li class="{{Request::is('admin/department*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('department.index')}}">
            <i class="material-icons">account_balance</i>
              <p>Departments</p>
            </a>
          </li>
          <li class="{{Request::is('admin/doctor*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('doctor.index')}}">
            <i class="material-icons">person</i>
              <p>Doctors</p>
            </a>
          </li>
          <li class="{{Request::is('admin/reservation*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('reservation.index')}}">
            <i class="material-icons">chrome_reader_mode</i>
              <p>Appoinment</p>
            </a>
          </li>
          <li class="{{Request::is('admin/contact*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('contact.index')}}">
            <i class="material-icons">message</i>
              <p>Contact Message</p>
            </a>
          </li>
          <li class="{{Request::is('admin/stuff*') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('stuff.index')}}">
            <i class="material-icons">people</i>
              <p>General Stuff</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>