<!doctype html>
<html lang="en">

<head>
    <?=  $this->include("templates/_bapartials/head")?>
</head>

<body>
    <!-- loader Start -->
    <!-- <div id="loading">
        <div id="loading-center">
            <div class="loader">
                <div class="cube">
                    <div class="sides">
                        <div class="top"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="left"></div>
                        <div class="front"></div>
                        <div class="back"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <?=  $this->include("templates/_bapartials/sidebar")?>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <?=  $this->include("templates/_bapartials/navbar")?>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <?=  $this->include("templates/_bapartials/content")?>
        </div>
    </div>
    <!-- Wrapper END -->
    <!-- Footer -->
    <footer class="bg-white iq-footer">
        <?=  $this->include("templates/_bapartials/footer")?>
    </footer>
    <!-- Footer END -->
    <?=  $this->include("templates/_bapartials/js")?>
</body>

</html>