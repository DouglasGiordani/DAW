<?php
session_start();
if(!isset($_SESSION['Administrador'])){
	header ("Location:../login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celeni Fotos</title>

    <link rel="stylesheet" type="text/css" href="../../interface/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../interface/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../../interface/css/local.css" />
	

    <script type="text/javascript" src="../../interface/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../../interface/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Celeni Fotos</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><a href="../categoria/listar.php"><i class="glyphicon glyphicon-cog"></i> Gerenciar Galeria</a></li>    
                     <li><a href="../categoria/categorias.php"><i class="glyphicon glyphicon-plus"></i>Adicionar Galeria</a></li>				                
					<li><a href="../Usuario/inserir.php"><i class="fa fa-user"></i> Adicionar Usuario</a></li>          
					<li><a href="../produto/produto.php"><i class="glyphicon glyphicon-plus"></i> Adicionar Fotos</a></li>
                  	<li><a href="../produto/listar.php"><i class="glyphicon glyphicon-list-alt"></i>Fotos</a></li>  
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">20</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">20 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Douglas Giordani<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> configuracao</a></li>
                            <li class="divider"></li>
                            <li><a href="../login/sair.php"><i class="fa fa-power-off"></i> sair</a></li>

                        </ul>
                    </li>
                    <li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>