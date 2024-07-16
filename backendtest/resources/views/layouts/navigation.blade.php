<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="notification-badge">0</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li style="width:300px;height:350px; overflow-y:scroll" class="p-0">
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Title</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-danger badge">Read</a>
                                </div>
                              </div>
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Title</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-danger badge">Read</a>
                                </div>
                              </div>
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Title</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-danger badge">Read</a>
                                </div>
                              </div>
                            <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Title</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="#" class="btn btn-danger badge">Read</a>
                                </div>
                              </div>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.notification-badge {
    position: absolute;
    top: 8px;
    right: 16px;
    padding: 2px 4px;
    border-radius: 50%;
    background: red;
    color: white;
    font-size: 10px;
}
</style>
