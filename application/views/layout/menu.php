<body class="messages-page">

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-gear text-primary"></i>
                </span>
                <span class="panel-title"> Theme Options</span>
            </div>
            <div class="panel-body pn">

                <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                    <li class="active">
                        <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                    </li>
                    <li>
                        <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                    </li>
                    <li>
                        <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                    </li>
                </ul>

                <div class="tab-content p20 ptn pb15">
                    <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                        <form id="toolbox-header-skin">
                            <h4 class="mv20">Header Skins</h4>

                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom checkbox-disabled fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">
                                    <label for="headerSkin8">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-primary mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                    <label for="headerSkin1">Primary</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-info mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                    <label for="headerSkin3">Info</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-warning mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                    <label for="headerSkin4">Warning</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-danger mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                    <label for="headerSkin5">Danger</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-alert mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                    <label for="headerSkin6">Alert</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-system mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                    <label for="headerSkin7">System</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-success mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                    <label for="headerSkin2">Success</label>
                                </div>
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                    <label for="headerSkin9">Dark</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                        <form id="toolbox-sidebar-skin">

                            <h4 class="mv20">Sidebar Skins</h4>
                            <div class="skin-toolbox-swatches">
                                <div class="checkbox-custom fill mb5">
                                    <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                    <label for="sidebarSkin3">Dark</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-disabled mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                    <label for="sidebarSkin1">Light</label>
                                </div>
                                <div class="checkbox-custom fill checkbox-light mb5">
                                    <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                    <label for="sidebarSkin2">Lighter</label>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                        <form id="toolbox-settings-misc">
                            <h4 class="mv20 mtn">Layout Options</h4>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" checked="" id="header-option">
                                    <label for="header-option">Fixed Header</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="sidebar-option">
                                    <label for="sidebar-option">Fixed Sidebar</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-option">
                                    <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox-custom fill mb5">
                                    <input type="checkbox" id="breadcrumb-hidden">
                                    <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                                </div>
                            </div>
                            <h4 class="mv20">Layout Options</h4>
                            <div class="form-group">
                                <div class="radio-custom mb5">
                                    <input type="radio" id="fullwidth-option" checked name="layout-option">
                                    <label for="fullwidth-option">Fullwidth Layout</label>
                                </div>
                            </div>
                            <div class="form-group mb20">
                                <div class="radio-custom radio-disabled mb5">
                                    <input type="radio" id="boxed-option" name="layout-option" disabled>
                                    <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b></label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="form-group mn br-t p15">
                    <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding">
                <a class="navbar-brand" href="http://sakti.stiki.ac.id/index.php/dashboard"> 
                <img src="http://sakti.stiki.ac.id/assets/admindesign/img/logos/stiki_logo.png" title="Sistem Informasi Akademik STIKI" class="img-responsive w150" style="padding-top: 15px;"/></a>
                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                <ul class="nav navbar-nav pull-right hidden">
                    <li>
                        <a href="#" class="sidebar-menu-toggle">
                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
                </li>
                <li class="dropdown hidden">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicons glyphicons-settings fs14"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                        </li>
                        <li class="divider mv5"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="request-fullscreen toggle-active" href="#">
                        <span class="octicon octicon-screen-full fs18"></span>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left navbar-search ml5" role="search" action="http://sakti.stiki.ac.id/index.php/search" method="GET">
                                    <div class="form-group">
                        <input type="text" name="key" class="form-control" placeholder="Search..." value="">
                    </div>
                            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-item-slide" id="notif">
                    <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
                        <span class="glyphicons glyphicons-bell fs18 notif"></span><span class="badge badge-hero badge-danger num_notif"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">
                        <li class="bg-light p8 notif-header">
                            <span class="fw600 pl5 lh30"> Notifikasi</span>
                            <span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5 num_notif"></span>
                        </li>
                        <div id="ee-notif"></div>
                        <li style="padding-right: 10px;"><span class="fw600 pl5 lh30 pull-right"> <a href="javascript:;" id="mark-all-notif-as-read">Hapus seluruh notifikasi</a></span></li>
                    </ul>
                </li>
                <li class="dropdown dropdown-item-slide" id="notif-msg">
                    <a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">
                        <span class="glyphicons glyphicons-message_empty fs18 msg-notif"></span><span class="badge badge-hero badge-danger num_msg"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">
                        <li class="bg-light p8 notif-msg-header">
                            <span class="fw600 pl5 lh30"> Kotak Pesan</span>
                            <span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5 num_msg"></span>
                        </li>
                        <div id="dd-notif"></div>
                        <li style="padding-right: 10px;"><span class="fw600 pl5 lh30 pull-right"> <a href="javascript:;" id="mark-all-as-read">Tandai sudah baca semua</a></span></li>
                    </ul>
                </li>
                <li class="ph10 pv20"> <i class="fa fa-circle text-tp fs8"></i>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="http://files.stiki.ac.id/repository/Images/profile_picture/0100405c50a28c7b0863fdce092c74ef79f7bc-thumb.jpg" id="pp_pojok" alt="avatar" class="mw30 br64 mr15">
                        <span>Sugeng Widodo, S.Kom., M.Kom</span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                <span class="glyphicons glyphicons-crown pr5"></span>
                                &nbsp;&nbsp;
                                Dosen Wali                            </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                <span class="fa fa-credit-card pr5"></span> 
                                010040                            </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                                <span class="fa fa-user pr5"></span>
                                sugengw@stiki.ac.id                            </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="http://sakti.stiki.ac.id/index.php/configurations" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="glyphicons glyphicons-keys pr5"></span>&nbsp;&nbsp;Ubah Password </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="glyphicons glyphicons-circle_info pr5"></span>&nbsp;&nbsp;Software Version 2.7.0.0 </a>
                        </li>
                        <li class="br-t of-h">
                            <a href="http://sakti.stiki.ac.id/index.php/login/logout" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    <div class="user-menu">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicons glyphicons-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicons glyphicons-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicons glyphicons-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="glyphicons glyphicons-imac"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicons glyphicons-settings"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="glyphicons glyphicons-restart"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End: Sidebar Header -->

                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li><li id='dashboard'>
					<a href='http://sakti.stiki.ac.id/index.php/dashboard'>
                    <span class='glyphicons glyphicons-home'></span>
                    <span class='sidebar-title'>Beranda</span>
					</a>
				</li><li id='dosen'>
					<a href='http://sakti.stiki.ac.id/index.php/dosen'>
                    <span class='glyphicons glyphicons-user'></span>
                    <span class='sidebar-title'>Profile Dosen</span>
					</a>
				</li><li id='dos_daftar_mahasiswa_wali'>
					<a href='http://sakti.stiki.ac.id/index.php/dos_daftar_mahasiswa_wali'>
                    <span class='imoon imoon-users2'></span>
                    <span class='sidebar-title'>Mahasiswa Wali</span>
					</a>
				</li><li id='jadwal_dosen'>
					<a href='http://sakti.stiki.ac.id/index.php/jadwal_dosen'>
                    <span class='glyphicon glyphicon-calendar'></span>
                    <span class='sidebar-title'>Jadwal Mengajar</span>
					</a>
				</li><li id='kehadiran_kelas'>
					<a href='http://sakti.stiki.ac.id/index.php/kehadiran_kelas'>
                    <span class='fa fa-bell'></span>
                    <span class='sidebar-title'>Kehadiran Kelas</span>
					</a>
				</li><li id='isi_nilai'>
					<a href='http://sakti.stiki.ac.id/index.php/isi_nilai'>
                    <span class='imoon imoon-calculate'></span>
                    <span class='sidebar-title'>Isi Nilai</span>
					</a>
				</li><li id='lp_kuisioner_ajar'>
					<a href='http://sakti.stiki.ac.id/index.php/lp_kuisioner_ajar'>
                    <span class='glyphicon glyphicon-retweet'></span>
                    <span class='sidebar-title'>Kuisioner Pengajaran</span>
					</a>
				</li><li>
					<a class='accordion-toggle' href='javascript:;' id='SAKTI_Akademis'>
					<span class='glyphicons glyphicons-adress_book'></span>
                    <span class='sidebar-title'>Akademik</span>
                    <span class='caret'></span>
					</a>
                    <ul class='nav sub-nav'>
                    <li id="kurikulum">
						<a href="http://sakti.stiki.ac.id/index.php/kurikulum">
                            <span class="fa fa-compass"></span>
                            Kurikulum
                        </a>
				    </li><li id="mata_kuliah">
						<a href="http://sakti.stiki.ac.id/index.php/mata_kuliah">
                            <span class="imoon imoon-books"></span>
                            Mata Kuliah
                        </a>
				    </li><li id="kalender_akademik">
						<a href="http://sakti.stiki.ac.id/index.php/kalender_akademik">
                            <span class="imoon imoon-calendar"></span>
                            Kalender
                        </a>
				    </li></ul></li><li>
					<a class='accordion-toggle' href='javascript:;' id='SAKTI_Account'>
					<span class='glyphicons glyphicons-cogwheels'></span>
                    <span class='sidebar-title'>Pengaturan</span>
                    <span class='caret'></span>
					</a>
                    <ul class='nav sub-nav'>
                    <li id="configurations">
						<a href="http://sakti.stiki.ac.id/index.php/configurations">
                            <span class="glyphicons glyphicons-cogwheel"></span>
                            Pengaturan Pengguna
                        </a>
				    </li></ul></li>                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>

        <!-- Start: Content -->
        <section id="content_wrapper">

                        <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb"><li class="crumb-active">
                        <a href="http://sakti.stiki.ac.id/index.php/dashboard">Beranda</a>
                    </li><li class="crumb-icon">
                        <a href="http://sakti.stiki.ac.id/index.php/dashboard">
                            <span class="glyphicons glyphicons-home"></span>
                        </a>
                    </li><li class="crumb-trail">
					<a href="http://sakti.stiki.ac.id/index.php/dashboard">Beranda</a>
				</li></ol>                </div>
            </header>
            <!-- End: Topbar -->
                        <!-- Begin: Content -->
                <!-- Begin: Content -->
<style>
    ul.dash-playlist li a{
        padding: 11px 10px 11px 10px !important;
    }
</style>
<link rel="stylesheet" href="http://sakti.stiki.ac.id/assets/additional/imgPicker/css/imgpicker.css">
