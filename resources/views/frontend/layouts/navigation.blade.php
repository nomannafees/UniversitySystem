<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-4" href="{{url('/')}}">
            <img src="{{asset('frontend/assets/img/logo1.svg')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning btn-block me-4" href="#">Blogs</a>
                </li>

                <!-- Auth Links -->
            @guest
                <!-- Show Login Link if User is Not Logged In -->
                    <li class="nav-item">
                        <a class="nav-link me-4" href="{{ route('login') }}">Login</a>
                    </li>
            @else
                <!-- Dropdown Menu for Logged-In User -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-4" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end bg-light-dark" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white bg-dark border-0" style="background-color: transparent;">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>
