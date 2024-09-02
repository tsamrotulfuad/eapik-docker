<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
        <a href="index.html">E-Apik</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">EA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->routeIs('*.dashboard') ? 'active' : '' }}"><a href="/redirectAuthUsers" class="nav-link"><i class="fas fa-th"></i><span>Dashboard</span></a> </li>
            <!-- Super Admin -->
            @if(Auth::user()->role == 'superadmin') 
                <li class="menu-header">Menu</li>
                <li><a href="#" class="nav-link"><i class="fas fa-columns"></i> <span>Manage Users</span></a> </li>
                <!-- Perencanaan  -->
                <li class="menu-header">Perencanaan</li>
                <li><a href="#" class="nav-link"><i class="fas fa-columns"></i> <span>Kertas Kerja</span></a> </li>
                <!-- Litbang -->
                <li class="menu-header">Litbang</li>
                <li><a href="#" class="nav-link"><i class="fas fa-columns"></i> <span>Daftar Inovasi</span></a> </li>
            @endif
            <!-- Admin -->
            @if(Auth::user()->role == 'admin')
                <!-- Perencanaan  -->
                <li class="menu-header">Perencanaan</li>
                <li><a href="#" class="nav-link"><i class="fas fa-columns"></i> <span>Kertas Kerja</span></a> </li>
                <!-- Litbang -->
                <li class="menu-header">Litbang</li>
                <li class="{{ request()->routeIs('*.inovasi') ? 'active' : '' }}"><a href="{{ route('admin.inovasi') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Inovasi</span></a> </li>
            @endif
            <!-- User -->
            @if(Auth::user()->role == 'user')
                <li class="menu-header">Perencanaan</li>
                <li class="{{ request()->routeIs('*.pohonkinerja') ? 'active' : '' }}"><a href="{{ route('user.pohonkinerja') }}" class="nav-link"><i class="fas fa-columns"></i> <span>Pohon Kinerja</span></a> </li>
            @endif
        </ul>
    </aside>
</div>