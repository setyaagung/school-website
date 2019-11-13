<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/administrator/dashboard" class="{{ (request()->segment(2) == 'dashboard') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span> Dashboard</span></a></li>
        <li><a href="/administrator/profil" class="{{ (request()->segment(2) == 'profil') ? 'active' : ''}}"><i class="lnr lnr-apartment"></i> <span> Profil Sekolah</span></a></li>
        <li><a href="/administrator/staff" class="{{ (request()->segment(2) == 'staff') ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span> Guru & Karyawan</span></a></li>
        <li><a href="/administrator/berita" class="{{ (request()->segment(2) == 'berita') ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span> Berita</span></a></li>
        <li><a href="/administrator/pendaftaran" class="{{ (request()->segment(2) == 'pendaftaran') ? 'active' : ''}}"><i class="lnr lnr-inbox"></i> <span> Pendaftaran</span></a></li>
        <li><a href="/administrator/user" class="{{ (request()->segment(2) == 'user') ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span> Users</span></a></li>
      </ul>
    </nav>
  </div>
</div>