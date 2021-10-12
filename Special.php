<?php 

session_start();

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="./Resources/code-base2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Food|Ordering|System</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb.css" rel="stylesheet">


</head>
<style>
    .body {
        height: 100%;
    }
    
    .login {
        width: 40%;
        margin: 5% auto;
        background-color: rgb(53, 52, 52);
    }
    
    form div {
        width: 60%;
        margin: auto;
        padding: .5rem;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }
    
    .inp {
        margin-left: 5rem;
        padding: .5rem .5rem .5rem .5rem;
        padding-top: 2rem;
        outline: none;
        border: none;
    }
    
    span button {
        margin-top: .1rem;
        margin-bottom: 1rem;
        margin-left: 35%;
        justify-content: center;
        align-items: center;
        padding: .5rem;
        width: 100px;
        display: grid;
        grid-template-columns: repeat(1, 1fr);
    }
    
    @media only screen and (max-width: 760px) {
        .body {
            width: 100%;
            grid-template-columns: repeat(1, 1fr);
        }
        .login {
            width: 90%;
            margin: 5% auto;
        }
        form div {
            width: 50%;
        }
        .inp {
            margin-left: 2rem;
            padding: .5rem .5rem .5rem 1rem;
            padding-top: 2rem;
        }
        span button {
            margin-top: .5rem;
            margin-bottom: 1rem;
            margin-left: 30%;
            justify-content: center;
            align-items: center;
            padding: .5rem;
            width: 100px;
        }
    }
</style>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">Food Ordering System</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
            </li>
        </ul>
        <div class="search-wrapper">
            <i class="fa fa-search"></i>
            <input type="search" placeholder="search here">
        </div>

    </nav>

    <div id="wrapper">

        <!------------------ Sidebar ------------------->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link"  href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Hi Remegio</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link"  href="menu.php">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span>Food Menu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="Order.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span >My Orders</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="Profile.php">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="Special.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Special Order</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="logout.php" >
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span>
                </a>
            </li>

        </ul>


        <div id="content-wrapper">

            <div class="container-fluid">

       

            </div>
            <div class="card-body ">

                <div class="recent-grid">
                    <div class="manage-books">
                        <div class="card">
                            <div class="card-header">
                                <h2>Special Order</h2>

                            </div>

                            <div class="card-body">
                                <div class="body">
                                    <div class="login">

                                        <form action="">

                                            <div class="inp ">
                                                <input type="text" class=" form-group " placeholder="Food Name" required name="food">
                                                <textarea class="form-group " placeholder="Food Description" id=" " rows="3 " name="description"></textarea>
                                                <input class=" form-group " placeholder="Derivery point" name=" " required>
                                            </div>

                                            <span> <button class="btn btn-primary text-white ">Order Now </button></sp>
                                        </form>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->

    </div>
    <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

   


                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js "></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js "></script>

                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin.min.js "></script>


                        <script type="text/javascript ">
                            window.setTimeout(function() {
                                $(".alert ").fadeTo(500, 0).slideUp(500, function() {
                                    $(this).hide();
                                });
                            }, 1000);
                        </script>

</body>

                        </html>