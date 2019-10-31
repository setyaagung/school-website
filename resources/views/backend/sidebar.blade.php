<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/admin/dashboard" class="{{ 'admin/dashboard' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span> Dashboard</span></a></li>
        <li><a href="/admin/berita" class="{{ 'admin/berita' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span> Berita</span></a></li>
        <li><a href="/admin/user" class="{{ 'admin/user' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span> Users</span></a></li>
      </ul>
    </nav>
  </div>
</div>