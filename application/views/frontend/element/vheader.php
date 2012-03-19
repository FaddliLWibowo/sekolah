<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>img/logo.ico" />
<!--        <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--css/bootstrap.css"/>-->
<!--        <link rel="stylesheet" type="text/css" href="--><?php //echo base_url(); ?><!--css/bootstrap-responsive.css"/>-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery.ui.all.css"/>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--js/jquery.tools.min.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jstyle.js"></script>
<!--        <script type="text/javascript" src="--><?php //echo base_url(); ?><!--js/bootstrap.js"></script>-->

    </head>

    <body>



    <script type="text/javascript">
        $(function(){
            $('.dropdown-toggle').dropdown();
//            $('.dropdown-toggle2').dropdown();
//            $('.dropdown-toggle3').dropdown();
//            $('.dropdown-toggle4').dropdown();
//            $('.dropdown-toggle5').dropdown();
//            $('.dropdown-toggle6').dropdown();
        });
    </script>

    <div class="wrap">
        <div class="header">
            <div class="panel_header">
<!--                <ul style="z-index: 2" id="menu_list">-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/cpage">Home</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/page/cprofil">Profil</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/page/cguru">Guru</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/page/csiswa">Siswa</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/page/calumni">Alumni</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/page/cfitur">Fitur</a></li>-->
<!--                    -->
<!---->
<!--                </ul>-->

                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">

                            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>

                            <!-- Be sure to leave the brand out there if you want it shown -->
                            <a class="brand" href="<?php echo base_url(); ?>index.php/cpage">SMA NEGERI ABUNG TINGGI</a>

                            <!-- Everything you want hidden at 940px or less, place within here -->
                            <div class="nav-collapse">

                                <ul class="nav pills">

                                    <li class="dropdown" id="menu">
                                        <a href="<?php echo base_url(); ?>index.php/cpage">
                                            Home
                                        </a>

                                    </li>
                                    <li class="dropdown" id="menu2">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">
                                            Profil
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=mot">Motto, Visi dan Misi</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sej">Sejarah Singkat</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sar">Sarana & Prasarana</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=org">Struktur Organisasi</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=pres">Prestasi</a></li>
                                        </ul>

                                    </li>

                                    <li class="dropdown" id="menu3">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">
                                            Guru
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirG">Direktori Guru</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=sil">Silabus</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=kal">Kalender Akademik</a></li>

                                        </ul>

                                    <li class="dropdown" id="menu4">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
                                            Siswa
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirS">Direktori Siswa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=prest">Prestasi Siswa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=eks">Ektrakurikuler</a></li>

                                        </ul>


                                    </li>

                                    <li class="dropdown" id="menu5">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu5">
                                            Alumni
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=dirA">Direktori Alumni</a></li>

                                        </ul>

                                    </li>

                                    <li class="dropdown" id="menu6">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu6">
                                            Fitur
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=age">Agenda</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=art">Artikel</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=opi">Opini</a></li>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url(); ?>index.php/subpage/csub?menu=tam">Buku Tamu</a></li>

                                        </ul>

                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
                



<!--                <ul id="menu_list_hide">-->

<!--                    <li>-->
<!--                        <table style="margin-left: 50px;" id="tab0" >-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=mot">Motto, Visi dan Misi</a></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=sej">Sejarah Singkat</a></td>-->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=sar">Sarana & Prasarana</a></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=org">Struktur Organisasi</a></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=pres">Prestasi</a></td>-->
<!--                            </tr>-->
<!--                        </table>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <table style="margin-left: 135px;" id="tab1">-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=dirG">Direktori Guru</a></td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=sil">Silabus</a></td>-->
<!--                            </tr>-->
<!---->
<!--                            <tr>-->
<!--                                <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=kal">Kalender Akademik</a></td>-->
<!--                            </tr>-->
<!---->
<!--                        </table>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <table style="margin-left: 225px;" id="tab2">-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=dirS">Direktori Siswa</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=prest">Prestasi Siswa</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=eks">Ektrakurikuler</a></td>-->
<!--                        </tr>-->
<!--                        </table>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <table style="margin-left: 310px; " id="tab3">-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=dirA">Direktori Alumni</a></td>-->
<!--                        </tr>-->
<!---->
<!--                        </table>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <table style="margin-left: 400px;" id="tab4">-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=age">Agenda</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=art">Artikel</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=opi">Opini</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td><a href="--><?php //echo base_url(); ?><!--index.php/subpage/csub?menu=tam">Buku Tamu</a></td>-->
<!--                        </tr>-->
<!--                        </table>-->
<!--                    </li>-->

<!--                </ul>-->
                <div class="img_header" style="z-index: 0">

                </div>
            </div>
        </div>

