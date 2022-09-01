<div class="iq-sidebar-logo d-flex justify-content-between">
    <a href="index.html">
        <img src="images/logo.png" class="img-fluid" alt="">
        <!-- <span>DAMRI</span> -->
        <span> <img src="<?php echo base_url('assets/images/damri/logos-damri.png')?>" alt="" srcset=""
                style="width:90%; height:80%;"></span>
    </a>
    <div class="iq-menu-bt align-self-center">
        <div class="wrapper-menu">
            <div class="line-menu half start"></div>
            <div class="line-menu"></div>
            <div class="line-menu half end"></div>
        </div>
    </div>
</div>
<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
        <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
            <li><a href="<?php echo base_url('/CBa/CDashboard')?>" class="iq-waves-effect"><i
                        class="ri-home-4-line"></i><span>Dashboard</span></a>
            </li>
            <li><a href="<?php echo base_url('/CBa/CBooking')?>" class="iq-waves-effect"><i
                        class="ri-chat-check-line"></i><span>Booking List</span></a>
            </li>
            <li>
                <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="ri-table-line"></i><span>Jadwal Bus</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="<?php echo base_url('/CBa/CTravelSchedule')?>">Data Jadwal</a></li>
                    <li><a href="<?php echo base_url('/CBa/CTravelSchedule/add')?>">Tambah Jadwal</a></li>
                </ul>
            </li>
            <li class="iq-menu-title"><i class="ri-separator"></i><span>Master</span></li>
            <li><a href="<?php echo base_url('/CBa/CUsers')?>" class="iq-waves-effect"><i
                        class="ri-user-line"></i><span>Users</span></a>
            </li>
        </ul>
    </nav>
    <div class="p-3"></div>
</div>