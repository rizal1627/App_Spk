<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>SPK - PT GPE</title>                
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('assets/css/theme-default.css')?>"/>
        <!-- EOF CSS INCLUDE -->                                      
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="#">SPK</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                     
                        <div class="profile">
                         
                            <div class="profile-data">
                                <div class="profile-data-name">Admin</div>
                                <div class="profile-data-title">PT Gajah Putih Elastic</div>
                            </div>
                          
                        </div>                                                                        
                    </li>
                    <li class="xn-title">User Data</li>
                    <li>
                        <a href="<?= base_url('karyawan')?>"><span class="fa fa-users"></span> <span class="xn-text">Karyawan</span></a>                        
                        <a href="<?= base_url('penilaian')?>"><span class="fa fa-file"></span> <span class="xn-text">Penilaian</span></a>                   
                        <a href="<?= base_url('laporan')?>"><span class="fa fa-file-text-o"></span> <span class="xn-text">Laporan</span></a>                        
                    
                    </li>  
                    
                    <li class="xn-title">Master Data</li>
                    <li>
                    <a href="<?= base_url('kriteria')?>"><span class="fa fa-list-ul"></span> <span class="xn-text">Kriteria</span></a>                        
                        <a href="<?= base_url('nilai')?>"><span class="fa fa-list-ol"></span> <span class="xn-text">Bobot</span></a>    
                    </li>
             
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>   
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                  
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                 
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
            
                <!-- END BREADCRUMB -->                                                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                <?php $this->load->view($page); ?>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                 
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?= base_url('/')?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- BLUEIMP GALLERY -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>      
        <!-- END BLUEIMP GALLERY -->        
        
        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?= base_url('assets/audio/alert.mp3')?>" preload="auto"></audio>
        <audio id="audio-fail" src="<?= base_url('assets/audio/fail.mp3')?>" preload="auto"></audio>
        <!-- END PRELOADS -->          
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery/jquery-ui.min.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/bootstrap/bootstrap.min.js')?>"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="<?= base_url('assets/js/plugins/icheck/icheck.min.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')?>"></script>
        
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js')?>"></script> 
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/datatables/jquery.dataTables.min.js') ?>"></script>  
        
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/bootstrap/bootstrap-datepicker.js')?>"></script>                
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/bootstrap/bootstrap-file-input.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/bootstrap/bootstrap-select.js')?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/plugins/tagsinput/jquery.tagsinput.min.js')?>"></script>


        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?= base_url('assets/js/settings.js')?>"></script>
        
        <script type="text/javascript" src="<?= base_url('assets/js/plugins.js')?>"></script>        
        <script type="text/javascript" src="<?= base_url('assets/js/actions.js')?>"></script>        
        <!-- END TEMPLATE -->

     
        
    <!-- END SCRIPTS -->         
    </body>
</html>






