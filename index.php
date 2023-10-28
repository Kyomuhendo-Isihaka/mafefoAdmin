<?php
$id = $_REQUEST['id'] ?? 'dashboard';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makefo</title>
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">


</head>

<body>

    <div id="throbber" style="display:none; min-height:120px;"></div>
    <div id="noty-holder"></div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar bg-primary navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Makefo</a>
            </div>

            <ul class="nav navbar-right top-nav">
                <li><a class="float-end" href="login.php">Logout</a></li>
            </ul>


            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav bg-primary pt-3">

                    <li>
                        <a href="index.php?id=dashboard"><i class="fa fa-fw fa-paper-plane-o"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="index.php?id=updates"><i class="fa fa-fw fa-user-plus"></i>Updates</a>
                    </li>

                    <li>
                        <a href="index.php?id=spare"><i class="fa fa-fw fa-paper-plane-o"></i>Spare Parts</a>
                    </li>

                    <li>
                        <a href="index.php?id=ladieshairproducts"><i class="fa fa-fw fa-paper-plane-o"></i>Ladies Hair
                            Products</a>
                    </li>


                    <li>
                        <a href="index.php?id=events"><i class="fa fa-fw fa fa-question-circle"></i>Events</a>
                    </li>
                    <li>
                        <a href="index.php?id=apartments"><i class="fa fa-fw fa fa-question-circle"></i>Apartments</a>
                    </li>
                    <li>
                        <a href="index.php?id=settings" class="active"><i
                                class="fa fa-fw fa fa-question-circle active"></i>Settings</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="ro p-5" id="main" style="margin-top: 80px">
                    <!-- <div class="col-sm-12 col-md-12 well" id="content">
                        <h1>Welcome Makefo!</h1>
                    </div> -->
                    <div class="container-fluid">

                        <?php if ($id == 'dashboard') {
                            echo $id;
                        } ?>


                        <?php if ($id == 'updates') {
                            echo $id;
                        } ?>

                        <?php if ($id == 'spare') {
                            echo $id;
                        } ?>

                        <?php if ($id == 'ladieshairproducts') {
                            echo $id;
                        } ?>

                        <?php if ($id == 'events') {
                            echo $id;
                        } ?>
                        <?php if ($id == 'apartments') {
                            echo $id;
                        } ?>

                        <?php if($id =='settings'){
                            echo $id;
                        }?>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
            $(".side-nav .collapse").on("hide.bs.collapse", function () {
                $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
            });
            $('.side-nav .collapse').on("show.bs.collapse", function () {
                $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
            });
        })
    </script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            / 
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    < /script > 
                < script src = "https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin = "anonymous" >
        </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>


</body>

</html>