<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="{{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">
                {{-- <li class="{{ Request::is('users*') ? 'active' : '' }}"> --}}
                {{-- Jika struktur URL berubah (misalnya /users menjadi /members), Anda harus memperbarui setiap penggunaan Request::is() yang terkait dengan URL tersebut. --}}
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-user"></i>
                    <span>Users</span>
                </a>
            </li>

            <li class="{{ Route::currentRouteName() == 'companies.show' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('companies.show', 1) }}">
                    <i class="fas fa-building"></i>
                    <span>Company</span>
                </a>
            </li>

            <li class="{{ Route::currentRouteName() == 'attendances.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('attendances.index') }}">
                    <i class="fas fa-user-check"></i>
                    <span>Attendances</span>
                </a>
            </li>

            <li class="{{ Route::currentRouteName() == 'permissions.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('permissions.index') }}">
                    <i class="fas fa-key"></i>
                    <span>Permission</span>
                </a>
            </li>

        </ul>
    </aside>
</div>
