<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee-Management</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="plugins/fontawesome-free/css/all.min.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- Google Font: Source Sans Pro -->
   		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
        <!-- Font Awesome -->
        <!-- <link rel="stylesheet" type="text/css" href="plugins/fontawesome-free/css/all.min.css"> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  -->

        <!-- Theme style -->
        <!-- <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"> -->

  <style>
    .dot {
		margin:0px auto;
		align-self: center;
		color: #797979;
		width:60px;
		height:30px;
		--d:radial-gradient(farthest-side,currentColor 90%,#0000);
		background:var(--d),var(--d),var(--d),var(--d);
		background-size:12px 12px;
		background-repeat:no-repeat;
		animation: m .8s infinite;
	  }
	  
	  @keyframes m {
		0%   {background-position:calc(0*100%/3) 100%, calc(1*100%/3) 100%, calc(2*100%/3) 100%, calc(3*100%/3) 100%}
		12.5%{background-position:calc(0*100%/3) 0   , calc(1*100%/3) 100%, calc(2*100%/3) 100%, calc(3*100%/3) 100%}
		25%  {background-position:calc(0*100%/3) 0   , calc(1*100%/3) 0   , calc(2*100%/3) 100%, calc(3*100%/3) 100%}
		37.5%{background-position:calc(0*100%/3) 0   , calc(1*100%/3) 0   , calc(2*100%/3) 0   , calc(3*100%/3) 100%}
		50%  {background-position:calc(0*100%/3) 0   , calc(1*100%/3) 0   , calc(2*100%/3) 0   , calc(3*100%/3) 0   }
		62.5%{background-position:calc(0*100%/3) 100%, calc(1*100%/3) 0   , calc(2*100%/3) 0   , calc(3*100%/3) 0   }
		75%  {background-position:calc(0*100%/3) 100%, calc(1*100%/3) 100%, calc(2*100%/3) 0   , calc(3*100%/3) 0   }
		87.5%{background-position:calc(0*100%/3) 100%, calc(1*100%/3) 100%, calc(2*100%/3) 100%, calc(3*100%/3) 0   }
		100% {background-position:calc(0*100%/3) 100%, calc(1*100%/3) 100%, calc(2*100%/3) 100%, calc(3*100%/3) 100%}
	  }

	  	.btn:hover
		{
		    background-color: #000;
		}
		label
		{
		    font-size: 18px;
		    text-shadow: .5px .5px 1px black;
		}
		.waviy 
		{
		    text-shadow: 3px 3px 6px black;
		    position: relative;
		    -webkit-box-reflect: below -15px linear-gradient(transparent, rgba(0,0,0,.2));
		    font-size: 30px;
		}
		th
		{
		    text-align: center;
		}
		table
		{
		    box-shadow: 2px 2px 4px black;
		    text-align: center;
			/* height: 400px;
			width: 350px; */
		}
		table, th, td {
			border: 1px solid black;
		}

		.waviy span 
		{
		    letter-spacing: -6px;
		    position: relative;
		    display: inline-block;
		    color: #fff;
		    text-transform: uppercase;
		    animation: waviy 1.2s infinite;
		    animation-delay: calc(.1s * var(--i));
		}
		@keyframes waviy 
		{
		    0%,40%,100% 
		    {
		        transform: translateY(0)
		    }
		    20% 
		    {
		        transform: translateY(-15px)
		    }
		}

		.fa-eye, .fa-trash-alt, .fa-edit
		{
			cursor: pointer;
			margin:5px;
			font-size:20px;
		}
		.fa-eye:hover, .fa-trash-alt:hover, .fa-edit:hover
		{
			color: blue;
		}
		
  </style>
</head>
<body class="hold-transition sidebar-mini">

  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    <a class="brand-link" id="logo">
      <img src="dist/img/logo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">Employees</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
		  <li class="nav-item">
            <a class="nav-link" id="show_dashboard" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="show_employee" >
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Employee
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="show_role">
              <i class="nav-icon fa fa-tag"></i>
              <p>
                Role
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="show_dept">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Department
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>