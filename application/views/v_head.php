<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../asset/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css" />
	<script type="text/javascript" src="../asset/js/jquery-1.12.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/dt/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../asset/dt/dataTables.tableTools.css">
	<script type="text/javascript" charset="utf8" src="../asset/dt/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" charset="utf8" src="../asset/dt/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="../asset/dt/dataTables.tableTools.min.js"></script>
	<link href="../asset/css/simple-sidebar.css" rel="stylesheet">
	<script type="text/javascript" src="../asset/sweetalert-master/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../asset/sweetalert-master/dist/sweetalert.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-static-top navbar-custom" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand navbar-header" href="#" style="font-size: 20px; color: #fff;">HB SUVA</a>
		</div>
		<ul class="nav navbar-nav" style="margin-right: 20px;">
			<li><a href="#menu-toggle" id="menu-toggle"><i class="fa fa-exchange fa-lg" style="color: #fff;"></i></a></li>
		</ul>
	</nav>

	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            	<div class="list-group panel">
            		<a href="" id="dashboard" class="list-group-item"><i class="fa fa-dashboard fa-lg"> &nbsp;</i>&nbsp;Dashboard</a>
    				<a href="#master" id="mster" class="list-group-item" data-toggle="collapse" data-parent="#SideBar" style="margin-top: 1px;"><i class="fa fa-desktop fa-lg"> &nbsp;</i>&nbsp;Master<i class="fa fa-arrow-down fa-lg" style="margin-left: 2em;"></i></a>
    					<div class="collapse list-group-submenu" id="master">
      						<a href="" id="goods" class="list-group-item"><i class="fa fa-gift fa-lg"> &nbsp;</i>&nbsp;Produk</a>
					    </div>
				    <a href="#profile" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu" style="margin-top: 1px;">&nbsp;<i class="fa fa-ellipsis-v fa-lg">&nbsp;&nbsp;&nbsp;&nbsp;</i>&nbsp;&nbsp;Profile<i class="fa fa-arrow-down fa-lg" style="margin-left: 2em;"></i></a>
    					<div class="collapse list-group-submenu" id="profile">
					      	<a href="" class="list-group-item"><i class="fa fa-pencil fa-lg"> &nbsp;</i>&nbsp;Nama</a>
					      	<a href="" class="list-group-item"><i class="fa fa-pencil fa-lg"> &nbsp;</i>&nbsp;Jabatan</a>				      	
				    	</div>
				    <a href="../C_main/logout" class="list-group-item" style="margin-top: 1px;"><i class="fa fa-power-off fa-lg"> &nbsp;&nbsp;</i>&nbsp;Log Out</a>
  				</div>
            </ul>
        </div>