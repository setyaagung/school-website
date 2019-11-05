<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/admin/dashboard" class="{{ 'admin/dashboard' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span> Dashboard</span></a></li>
        <li><a href="/admin/profil" class="{{ 'admin/profil' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-apartment"></i> <span> Profil Sekolah</span></a></li>
        <li><a href="/admin/staff" class="{{ (request()->segment(2) == 'staff') ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span> Pendidik & Karyawan</span></a></li>
        <li><a href="/admin/berita" class="{{ (request()->segment(2) == 'berita') ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span> Berita</span></a></li>
        <li><a href="/admin/pendaftaran" class="{{ (request()->segment(2) == 'pendaftaran') ? 'active' : ''}}"><i class="lnr lnr-inbox"></i> <span> Pendaftaran</span></a></li>
        <li><a href="/admin/user" class="{{ (request()->segment(2) == 'user') ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span> Users</span></a></li>
      </ul>
    </nav>
  </div>
</div>