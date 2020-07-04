  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('')}}">Laravel WEB 3 Anggiawan Prasetyo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @if (!empty($halaman) && $halaman == 'index')
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('index')}}">Daftar Nama 
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @else
          <li><a href="{{ url('index')}}">Home </a></li>
          @endif

          @if (!empty($halaman) && $halaman == 'about')
          <li class="nav-item">
            <a class="nav-link" href="{{ url('about')}}"> About 
            <span class="sr-only">(current)</span>
            </a>
          </li>
          @else
          <li><a href="{{ url('about')}}">about </a></li>
          @endif
        </ul>
      </div>
    </div>
  </nav>