 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" style="text-align:right;">
            
            
             
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="material-icons">exit_to_app</i>
                      <p class="d-lg-none d-md-block">Log out</p>
                  </a>
                  
                  <form id="logout-form" method="POST" action="{{route('logout') }}" style="display:none">
                       @csrf
                  </form>
               
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->