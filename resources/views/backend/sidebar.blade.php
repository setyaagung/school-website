<div id="sidebar-nav" class="sidebar">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="/administrator/dashboard" class="{{ (request()->segment(2) == 'dashboard') ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span> Dashboard</span></a></li>
        <li><a href="/administrator/kontak/1/edit" class="{{ (request()->segment(2) == 'kontak') ? 'active' : ''}}"><i class="lnr lnr-apartment"></i> <span> Kontak Sekolah</span></a></li>
        <li><a href="/administrator/staff" class="{{ (request()->segment(2) == 'staff') ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span> Guru & Karyawan</span></a></li>
        <li><a href="/administrator/informasi" class="{{ (request()->segment(2) == 'informasi') ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span> Informasi</span></a></li>
        <li><a href="/administrator/pendaftaran" class="{{ (request()->segment(2) == 'pendaftaran') ? 'active' : ''}}"><i class="lnr lnr-inbox"></i> <span> PPDB Online</span></a></li>
        <li><a href="/administrator/user" class="{{ (request()->segment(2) == 'user') ? 'active' : ''}}"><i class="lnr lnr-user"></i> <span> Users</span></a></li>
      </ul>
    </nav>
  </div>
</div>