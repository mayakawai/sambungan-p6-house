<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                            aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
                <!-- / Search form -->
            </div>
            {{-- Navbar Links --}}
            <ul class="navbar-nav align-items-center">

                {{-- User Dropdown --}}
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder"
                                src="{{ asset('assets-admin/img/team/profile-picture-3.jpg') }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">
                                    {{ Auth::user()->name }}
                                </span>
                            </div>
                        </div>
                    </a>

                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">

                        {{-- My Profile --}}
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-3.546 2.095a5.96 5.96 0 00-10.908 0 6 6 0 0010.908 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>

                        {{-- Settings --}}
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M11.49 3.17c-.38-1.56-2.16-2.08-3.32-1.05A2.02 2.02 0 018.2 5.1c.47.2.76.7.76 1.22 0 .5-.27.95-.7 1.18a2 2 0 00-.87 2.37c.4 1.36 1.83 2.05 3.18 1.48 1.52-.63 2.2-2.14 1.96-3.53-.46-2.37.55-3.93 2.33-3.93 1.92 0 3.67.9 4.5 2.36.5.86.27 1.93-.56 2.53-.78.55-1.86.52-2.48-.07a1 1 0 00-1.45 1.37c.94.73 2.17.76 3.47.02 1.44-.81 2.22-2.43 1.78-4a6.005 6.005 0 00-5.95-4.35c-1.95 0-3.85.93-5.18 2.64-1.13 1.4-1.84 3.24-2.17 5.1a8.97 8.97 0 00-.31 2.64c0 2.87-.84 5.43-2.45 7.19A7.007 7.007 0 013 17.54C1.37 15.91.5 13.57.5 11c0-4.48 2.5-8.47 6.18-10.1C8.32-.32 10.63.55 11.49 3.17z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>

                        <div role="separator" class="dropdown-divider my-1"></div>

                        {{-- Logout --}}
                        <a class="dropdown-item d-flex align-items-center" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1m0-10V4m-4 16h10a2 2 0 002-2V6a2 2 0 00-2-2H9a2 2 0 00-2 2v2">
                                </path>
                            </svg>
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>