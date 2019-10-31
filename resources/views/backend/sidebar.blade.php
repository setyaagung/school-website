<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/admin/dashboard" class="{{ 'admin/dashboard' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span> Dashboard</span></a></li>
        <li><a href="/admin/profil" class="{{ 'admin/profil' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-apartment"></i> <span> Profil Sekolah</span></a></li>
        <li><a href="/admin/guru" class="{{ 'admin/guru' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span> Guru & Karyawan</span></a></li>
        <li><a href="/admin/berita" class="{{ 'admin/berita' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span> Berita</span></a></li>
        <li><a href="/admin/pendaftaran" class="{{ 'admin/pendaftaran' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-inbox"></i> <span> Pendaftaran</span></a></li>
        <li><a href="/admin/user" class="{{ 'admin/user' == request()->path() ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span> Users</span></a></li>
      </ul>
    </nav>
  </div>
</div>