<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar">
    <ul>
        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}" >Dashboard</a></li>
        <li class="{{ request()->routeIs('strains') ? 'active' : '' }}"><a href="{{ route('strains') }}" >Strains</a></li>
        <li class="{{ request()->routeIs('culturas') ? 'active' : '' }}"><a href="{{ route('culturas') }}" >Culturas</a></li>
        <!-- <li><a href="#">Cultura Sólida</a></li>
        <li><a href="#">Cultura Líquida</a></li>
        <li><a href="#">Spawn</a></li>
        <li><a href="#">Monotube</a></li>
        <li><a href="#">Casing</a></li> -->
        <li><a href="{{ route('logout') }}">Sair</a></li>
    </ul>
</nav>