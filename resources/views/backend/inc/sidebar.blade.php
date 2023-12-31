<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('backend') }}/img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>{{ auth()->user()->type }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin.home') }}"
                class="nav-item nav-link {{ Request::routeIs('admin.home') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('categories.index') }}"
                    class="nav-item nav-link  {{ Request::routeIs('categories.index') ? 'active' : '' }}"><i
                            class="fa fa-tachometer-alt me-2"></i>Categories</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle  " data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>page</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('categories.index')}}" class="dropdown-item ">Categories</a>
                </div>
            </div>
        </div>
    </nav>
</div>
