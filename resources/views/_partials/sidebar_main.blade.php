  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">

          <img src="{{Auth::user()->karyawan->id}}" class="img-circle">

        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">NE</li>
        <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ URL::to('absensi') }}"><i class="fa fa-users"></i> <span>Absensi</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('user') }}"><i class="fa fa-book"></i>User</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('karyawan') }}"><i class="fa fa-book"></i>Karyawan</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('jabatan') }}"><i class="fa fa-book"></i>Jabatan</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('kategori') }}"><i class="fa fa-book"></i>Kategori</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('pelanggan') }}"><i class="fa fa-book"></i>Pelanggan</a></li>
          </ul>
        </li>
 

        <li><a href="{{ URL::to('event') }}"><i class="fa fa-dashboard"></i> <span>Event</span></a></li>

        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('event') }}"><i class="fa fa-book"></i>Event</a></li>
          </ul>

           <ul class="treeview-menu">
            <li><a href="{{ URL::to('panitia') }}"><i class="fa fa-book"></i>Panitia</a></li>
          </ul>
        </li> --}}
  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="{{ URL::to('absensi') }}"><i class="fa fa-book"></i>Absensi</a></li>
          </ul>

          <ul class="treeview-menu">
            <li><a href="{{ URL::to('event') }}"><i class="fa fa-book"></i>Event</a></li>
          </ul>

           <ul class="treeview-menu">
            <li><a href="{{ URL::to('gaji') }}"><i class="fa fa-book"></i>Gaji</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>