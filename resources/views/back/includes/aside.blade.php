<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{ asset('back/logo/logo.jpeg') }}" style="width: 130px;height: 65px" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item d-none d-lg-flex me-3">
                <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                        Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                        Sponsor
                    </a>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <a href="{{ route('mode.swithcher',['theme'=>'dark']) }}" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                </a>
                <a href="{{ route('mode.swithcher',['theme'=>'light']) }}" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Last updates</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 1</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Change deprecated html tags to text decoration classes (#29604)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 2</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                justify-content:between ??? justify-content:space-between (#29734)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions show">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 3</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Update change-version.js (#29736)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 4</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Regenerate package-lock.json (#29730)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                    <span class="avatar avatar-sm" id="mobile-avatar" style="background-image: url({{ asset('avatars/'.auth()->user()->avatar) }})"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div id="sidebar-name2">{{ auth()->user()->name }}</div>
                        <div class="mt-1 small text-muted">UI Designer</div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    {{--  <a href="#" class="dropdown-item">Set status</a>  --}}
                    <a href="{{ route('back.profile') }}" class="dropdown-item">Profile & account</a>
                    {{--  <a href="#" class="dropdown-item">Feedback</a>  --}}
                    <div class="dropdown-divider"></div>
                    {{--  <a href="#" class="dropdown-item">Settings</a>  --}}
                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('option.index') }}" >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                  </span>
                    <span class="nav-link-title" style="{{ request()->segment(2) == 'option' ? 'color: #206bc4;' : '' }}">
                    Option
                    </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                    @if(in_array(request()->segment(2),[
                        'home-banner',
                        'strateji',
                        'partnyor',
                        'about-banner',
                        'project-banner',
                        'news-banner',
                        'news',
                        'meta',
                        'category'
                    ]))
                        show
                    @endif
                    " href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="
                    @if(in_array(request()->segment(2),[
                        'home-banner',
                        'strateji',
                        'partnyor',
                        'about-banner',
                        'project-banner',
                        'news-banner',
                        'news',
                        'meta',
                        'category'
                    ]))
                        true
                    @else
                        false
                    @endif
                    " >
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-windows" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                       <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                       <path d="M17.8 20l-12 -1.5c-1 -.1 -1.8 -.9 -1.8 -1.9v-9.2c0 -1 .8 -1.8 1.8 -1.9l12 -1.5c1.2 -.1 2.2 .8 2.2 1.9v12.1c0 1.2 -1.1 2.1 -2.2 1.9z"></path>
                       <line x1="12" y1="5" x2="12" y2="19"></line>
                       <line x1="4" y1="12" x2="20" y2="12"></line>
                    </svg>
                  </span>
                    <span class="nav-link-title" style="
                    @if(in_array(request()->segment(2),[
                        'home-banner',
                        'strateji',
                        'partnyor',
                        'about-banner',
                        'project-banner',
                        'news-banner',
                        'category',
                        'project',
                    ]))
                        color: #206bc4;
                    @endif
                    ">
                        Menus
                    </span>
                    </a>
                    <div class="dropdown-menu
                        @if(in_array(request()->segment(2),[
                            'home-banner',
                            'strateji',
                            'partnyor',
                            'about-banner',
                            'project-banner',
                            'news-banner',
                            'category',
                            'news',
                            'meta',
                            'project',
                        ]))
                            show
                        @endif
                    ">
                        <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle
                            @if(in_array(request()->segment(2),[
                                                    'home-banner',
                                                    'strateji',
                                                    'partnyor',
                                                ]))
                                        active show
@endif

                                        " href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="
                            @if(in_array(request()->segment(2),[
                                                    'home-banner',
                                                    'strateji',
                                                    'partnyor',
                                                ]))
                                        true
                            @else
                                        false
                            @endif

                                        ">
                                        Home
                                    </a>
                                    <div class="dropdown-menu
                            @if(in_array(request()->segment(2),[
                                                    'home-banner',
                                                    'strateji',
                                                    'partnyor',
                                                ]))
                                        show
                            @endif
                                        ">
                                        <a href="{{ route('home.banner') }}" class="dropdown-item {{ request()->segment(2) == 'home-banner' ? 'active' : '' }}">
                                            WATCH SHOWREEL
                                        </a>
                                        <a href="{{ route('home.strateji') }}" class="dropdown-item {{ request()->segment(2) == 'strateji' ? 'active' : '' }}">
                                            Startegiya Kreativ Digital
                                        </a>
                                        <a href="{{ route('home.partnyor',['type'=>'partnyor']) }}" class="dropdown-item {{ request()->segment(3) == 'partnyor' ? 'active' : '' }}">
                                            Partnyor
                                        </a>
                                        <a href="{{ route('home.partnyor',['type'=>'team']) }}" class="dropdown-item {{ request()->segment(3) == 'team' ? 'active' : '' }}">
                                            Team
                                        </a>
                                    </div>


                        </div>

                        <div class="dropend">
                            <a class="dropdown-item dropdown-toggle
                            @if(in_array(request()->segment(2),[
                                'project-banner',
                                'category',
                                'project',
                            ]))
                                active show
                            @endif

                                " href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="
                            @if(in_array(request()->segment(2),[
                                'project-banner',
                                'category',
                                'project',
                            ]))
                                true
                            @else
                                false
                            @endif
                                ">
                                Project
                            </a>
                            <div class="dropdown-menu
                            @if(in_array(request()->segment(2),[
                                'project-banner',
                                'category',
                                'project',
                            ]))
                                show
                            @endif
                                ">
                                <a href="{{ route('project.banner') }}" class="dropdown-item {{ request()->segment(2) == 'project-banner' ? 'active' : '' }}">
                                    WATCH SHOWREEL
                                </a>
                                <a href="{{ route('category.index') }}" class="dropdown-item {{ request()->segment(2) == 'category' ? 'active' : '' }}">
                                    Category
                                </a>
                                <a href="{{ route('project.index') }}" class="dropdown-item {{ request()->segment(2) == 'project' ? 'active' : '' }}">
                                    Project
                                </a>
                            </div>



                        </div>


                        <div class="dropend">
                            <a class="dropdown-item dropdown-toggle
                            @if(in_array(request()->segment(2),[
                                'news-banner',
                                'news',
                            ]))
                                active show
                            @endif

                                " href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="
                            @if(in_array(request()->segment(2),[
                                'news-banner',
                                'news',
                            ]))
                                true
                            @else
                                false
                            @endif
                                ">
                                News
                            </a>
                            <div class="dropdown-menu
                            @if(in_array(request()->segment(2),[
                                'news-banner',
                                'news',
                            ]))
                                show
                            @endif
                                ">
                                <a href="{{ route('news.banner') }}" class="dropdown-item {{ request()->segment(2) == 'news-banner' ? 'active' : '' }}">
                                    WATCH SHOWREEL
                                </a>
                                <a href="{{ route('news.index') }}" class="dropdown-item {{ request()->segment(2) == 'news' ? 'active' : '' }}">
                                    News
                                </a>
                            </div>



                        </div>



                        <a class="dropdown-item
                            @if(in_array(request()->segment(2),[
                                                    'about-banner',
                                                ]))
                            active show
                            @endif
                            " href="{{ route('about.banner') }}">
                            About
                        </a>

                        <a class="dropdown-item
                            @if(in_array(request()->segment(2),[
                                                    'meta',
                                                ]))
                            active show
                            @endif
                            " href="{{ route('meta.index') }}">
                            Meta
                        </a>
                    </div>
                </li>


            </ul>
        </div>
    </div>
</aside>
