<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Sistem Informasi Akademik
                    </a>
                </li>
				<li>
                    <h4><span class="label label-primary">Asep - Siswa (13512999)</span></h4>
                </li>
				<br> <br>
				<li>
                    <a href="#">Pengumuman</a>
                </li>
				<li class ="active">
                    <a href="#">Jadwal Akademik</a>
                </li>
				<li>
                    <a href="#">Pengaturan Jadwal</a>
                </li>
                <li>
                    <a href="#">Options</a>
                </li>
                <li>
                    <a href="#">Keluar</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<p> <img src ="img/logo.jpg" alt ="Logo" style ="width:200px;height:70px"> </img></p>
						<div style ="text-align:center;"> <h1> Jadwal Akademik EMS Dago</h1> </div>
						<table class="table table-responsive table-bordered table-condensed table-hover" style ="text-align:center">
							<tr class="active">
								<td width ="90px">Waktu</td>
								<td>Senin</td>
								<td>Selasa</td>
								<td>Rabu</td>
								<td>Kamis</td>
								<td>Jumat</td>
								<td>Sabtu</td>
							</tr>
							
							<?php 
								for($i = 7;$i<17;$i++) {
									$row = '<tr> 
												<td class = "active">'.$i.'-'.($i+1).'</td>';
									for ($j = 0;$j<6;$j++) {
										$avail = '';
										if (mt_rand(0, 1) == 0) $avail .= 'class ="success" >available'; else $avail.='class ="danger">not available';
										$row .= '<td '.$avail.'</td>';
									}
									echo $row;
								}
							?>
						</table>
						<!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
