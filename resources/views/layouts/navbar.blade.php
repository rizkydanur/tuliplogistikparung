{{-- Nav Bar Start --}}
<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                            <a href="{{ route('home') }}" class="nav-item nav-link {{ Request::route()->getName() == 'home' ? 'active' : '' }}">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link {{ Request::route()->getName() == 'about' ? 'active' : '' }}">About</a>
                            <a href="{{ route('gallery') }}" class="nav-item nav-link {{ Request::route()->getName() == 'gallery' ? 'active' : '' }}">Gallery</a>
                                {{-- <a href="team.html" class="nav-item nav-link">Team</a>
                                <a href="portfolio.html" class="nav-item nav-link">Project</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> --}}
                                <a href="{{ route('contact') }}" class="nav-item nav-link {{ Request::route()->getName() == 'contact' ? 'active' : '' }}">Contact</a>
                            </div>
                            <div class="ml-auto">

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            {{-- Nav Bar End --}}
