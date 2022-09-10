<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-category">Main</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('beranda') }}">
        <span class="icon-bg"><i class="fa-sharp fa-solid fa-house-chimney menu-icon"></i></span>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/artikel') }}">
        <span class="icon-bg"><i class="fa-regular fa-newspaper menu-icon"></i></span>
        <span class="menu-title">Artikel</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/komen') }}">
        <span class="icon-bg"><i class="fa-solid fa-comment menu-icon"></i></span>
        <span class="menu-title">Komentar</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/user') }}">
        <span class="icon-bg"><i class="fa-solid fa-user menu-icon"></i></span>
        <span class="menu-title">User</span>
      </a>
    </li>
  </ul>
</nav>