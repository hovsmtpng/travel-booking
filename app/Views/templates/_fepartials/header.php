<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="<?php echo base_url('')?>">
                        <!-- tour<span>Nest</span> -->
                        <img src="<?php echo base_url('assets/images/damri/logos-damri.png')?>" alt="" srcset="">
                    </a>
                </div><!-- /.logo-->
            </div><!-- /.col-->
            <div class="col-sm-10">
                <div class="main-menu">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button><!-- / button-->
                    </div><!-- /.navbar-header-->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="smooth-menu"><a href="#home">Beranda</a></li>
                            <li class="smooth-menu"><a href="#gallery">Destinasi</a></li>
                            <li class="smooth-menu"><a href="#pack">Paket Perjalanan </a></li>
                            <!-- <li class="smooth-menu"><a href="#spo">Special Offers</a></li> -->
                            <!-- <li class="smooth-menu"><a href="#blog">blog</a></li> -->
                            <!-- <li class="smooth-menu"><a href="#subs">subscription</a></li> -->
                            <!-- <li>
                                <button class="book-btn">book now
                                </button>
                            </li> -->
                            <li>
                                <?php if(session()->get('loggedin') == TRUE){ ?>
                                <a href="<?php echo base_url('CLogin/logout')?>" class="book-btn">Logout</a>
                                <?php } if(session()->get('loggedin') == FALSE){?>
                                <a href="<?php echo base_url('CLogin')?>" class="book-btn">Login</a>

                                <?php }?>
                            </li>
                            <!--/.project-btn-->
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.main-menu-->
            </div><!-- /.col-->
        </div><!-- /.row -->
        <div class="home-border"></div><!-- /.home-border-->
    </div><!-- /.container-->
</div><!-- /.header-area -->