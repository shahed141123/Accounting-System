<nav class="app-header navbar navbar-expand bg-body border-0">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link sidebar-toggler-btn" id="sidebarToggler" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="fa-solid fa-arrow-left" id="arrowLeft"></i>
                    <i class="fa-solid fa-arrow-right d-none" id="arrowRight"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('admin.dashboard') }}" class="nav-link px-1">Home</a>
            </li>
            @if (isset($breadcrumbs))
                @foreach ($breadcrumbs as $breadcrumb)
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ $breadcrumb['url'] }}" class="nav-link px-1">- {{ $breadcrumb['name'] }}</a>
                    </li>
                @endforeach
            @endif
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="./assets/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 rounded-circle me-3" />
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                </h3>
                                <p class="fs-7">Call me whenever you can...</p>
                                <p class="fs-7 text-secondary">
                                    <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>
                    <span class="navbar-badge badge text-bg-warning">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> 4 new messages
                        <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                </a>
            </li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="./assets/img/user2-160x160.jpg" class="user-image rounded-circle shadow"
                        alt="User Image" />
                    <span class="d-none d-md-inline">{{ Auth::guard('admin')->user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img src="./assets/img/user2-160x160.jpg" class="rounded-circle shadow" alt="User Image" />
                        <p>
                            {{ Auth::guard('admin')->user()->name }}
                            <small>Member since {{ Auth::guard('admin')->user()->created_at->format('M , Y') }}</small>
                        </p>
                        <p>
                            <a
                                href="mailto:{{ Auth::guard('admin')->user()->email }}">{{ Auth::guard('admin')->user()->email }}</a>
                        </p>
                    </li>
                    {{-- <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div>
                    </li> --}}
                    <li class="user-footer">
                        <a href="{{ route('admin.profile.edit') }}" class="btn btn-default btn-flat">My
                            Profile</a>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <a href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                class="btn btn-default btn-flat float-end"> {{ __('Sign Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
