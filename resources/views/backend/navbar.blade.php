<nav class="navbar navbar-default navbar-fixed-top">
  <div class="brand">
    <a href="#">MA HIDAYATUS SYUBBAN</a>
  </div>
  <div class="container-fluid">
    <div class="navbar-btn">
      <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
    </div>
    <div id="navbar-menu">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('backend/assets/img/user.png')}}" class="img-circle" alt="Avatar"> <span>{{auth()->user()->nickname}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#changePassword"><i class="lnr lnr-cog"></i> <span>Ganti Password</span></a></li>
            <li><a href="/admin/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- modal ganti password -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title">Ganti Password</h3>
      </div>
      <div class="modal-body">
        <form action="{{route('changepassword.update')}}" method="POST">
          @csrf
          @method('PATCH')
          <div class="form-group @error('old_password') has-error @enderror">
              <label><b>Password Lama</b></label>
              <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Password Lama">
              @error('old_password')
                  <span class="help-block">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-group @error('password') has-error @enderror">
              <label><b>Password Baru</b></label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password Baru">
              @error('password')
                  <span class="help-block">{{ $message }}</span>
              @enderror
          </div>

          <div class="form-group">
              <label><b>Konfirmasi Password</b></label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password">
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" value="submit">Update</button>
      </div>
    </form>
    </div>
  </div>
</div>