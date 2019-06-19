<?php
/**
 * Created by IntelliJ IDEA.
 * User: ACER
 * Date: 6/19/2019
 * Time: 9:15 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Muscat Grills :: Home</title>
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="http://restaurant.bdtask.com/assets/img/icons/2019-05-12/f.png" type="image/x-icon">


    <!-- Start Global Mandatory Style -->
    <!-- jquery-ui css -->
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap tag input-->
    <link href="css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->

    <!-- Lobipanel css -->
    <link href="css/lobipanel.min.css" rel="stylesheet" type="text/css"/>
    <!-- Pace css -->
    <link href="css/flash.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- Pe-icon -->
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <!-- Themify icons -->
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css"/>
    <!-- select2.min -->
    <link href="css/select2.min.css" rel="stylesheet" type="text/css"/>
    <!-- timepicker -->
    <link href="css/jquery-ui-timepicker-addon.min.css" rel="stylesheet" type="text/css"/>
    <!-- datatable -->
    <link href="css/dataTables.min.css" rel="stylesheet" type="text/css"/>
    <!-- End Global Mandatory Style

    <!-- Theme style -->
    <link href="css/custom.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->

    <!-- Include module style -->
    <link href=css/style.css rel="stylesheet"><link href=css/style.css rel="stylesheet"><link href=css/style1.css rel="stylesheet"><link href=css/style2.css rel="stylesheet"><link href=css/style3.css rel="stylesheet"><link href=css/style4.css rel="stylesheet"><link href=css/style.css rel="stylesheet"><link href=css/style5.css rel="stylesheet"><link href=css/style.css rel="stylesheet"><link href=css/style.css rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/jquery-ui.min.css">


</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="index.html" class="logo">
    <span class="logo-lg">
        <img src="http://restaurant.bdtask.com/assets/img/icons/2019-06-14/b.png" alt="">
    </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span><i class="fas fa-bars"></i></span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Order Alert -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle">
                            <i class="fas fa-bell"></i>
                            <span class="label label-success">136</span>
                        </a>
                    </li>
                    <!-- Messages -->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="far fa-envelope"></i>
                            <span class="label label-success">0</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="menu">

                                </ul>
                            </li>
                            <li class="footer"><a href=#>See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- settings -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fas fa-cog"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href=#><i class="pe-7s-users"></i> Profile</a></li>
                            <li><a href=#><i class="pe-7s-settings"></i> Setting</a></li>
                            <li><a href=#><i class="pe-7s-key"></i>  Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>            </header>


    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel text-center">
                <div class="image">
                    <img src="images/m2.png" class="img-circle" alt="User Image">
                </div>
                <div class="info">
                    <p>John Doe</p>
                    <a href="#"><i class="fa fa-circle text-success"><div style="height: 10px;width: 10px ;border-radius: 50%;background-color: green;margin-top: -10px"></div></i> Admin</a>
                </div>
            </div>


            <!-- sidebar menu -->
            <ul class="sidebar-menu">

                <li class="treeview active">
                    <a href="index.html"><i class="fas fa-home"></i> <span>Dashboard</span>
                    </a>
                </li>



                <!-- *************************************
                **********STATS OF CUSTOM MODULES*********
                ************************************* -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-user-circle"></i> <span>Accounts</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right">
                            </i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Chart of Account</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Debit Voucher</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Credit Voucher</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Contra Voucher</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Journal Voucher</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href="#">Voucher Approval</a>
                        </li>

                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Account Report
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Voucher Report</a></li>
                                <li class=""><a href=#>Cash Book</a></li>
                                <li class=""><a href=#>Bank Book</a></li>
                                <li class=""><a href=#>General Ledger</a></li>
                                <li class=""><a href=#>Trial Balance</a></li>
                                <li class=""><a href=#>Profit Loss</a></li>
                                <li class=""><a href=#>Cash Flow</a></li>
                                <li class=""><a href=#>Coa Print</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-users"></i> <span>HRM</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Attendance                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Attendance Form</a></li>
                                <li class=""><a href=#>Attendance Reports</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Award                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>New Award</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Recruitment                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class="">#</a></li>
                                <li class=""><a href=#>Manage Candidate</a></li>
                                <li class=""><a href=#>Candidate Shortlist</a></li>
                                <li class=""><a href=#>Interview</a></li>
                                <li class=""><a href=#>Candidate Selection</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Department                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Department</a></li>
                                <li class=""><a href=#>Add Division</a></li>
                                <li class=""><a href=#>Manage Division </a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Employee                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Position</a></li>
                                <li class=""><a href=#>Add Employee</a></li>
                                <li class=""><a href=#>Manage Employee</a></li>
                                <li class=""><a href=#>Employee Performance</a></li>
                                <li class=""><a href=#>Manage Employee Salary</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Leave                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Weekly Holiday</a></li>
                                <li class=""><a href=#>Holiday</a></li>
                                <li class=""><a href=#>Add Leave Type</a></li>
                                <li class=""><a href=#>Leave Application</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Loan                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Grant Loan</a></li>
                                <li class=""><a href=#>Loan Installment</a></li>
                                <li class=""><a href=#>Loan Report</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Payroll                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Salary Type Setup</a></li>
                                <li class=""><a href=#>Salary SetUp</a></li>
                                <li class=""><a href=#>Salary Generate</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-box"></i>
                        <span>Food Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Manage Category                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Add Category</a></li>
                                <li class=""><a href=#>Category List</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Manage Food                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Add Food</a></li>
                                <li class=""><a href=#>Food List</a></li>
                                <li class=""><a href=#>Food Variant</a></li>
                                <li class=""><a href=#>Food Availablity</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Manage Adons                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Add Add-ons</a></li>
                                <li class=""><a href=#>Add-ons List</a></li>
                                <li class=""><a href=#>Add-ons Assign List</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-folder"></i>
                        <span>Manage Order</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Add New Order</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Order List</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Pending Order</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Processing Order</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Complete Order</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Cancel Order</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Pos Invoice</a>
                        </li>

                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fab fa-product-hunt"></i>
                        <span>Production</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Set Production Unit</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Production Set List</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Add Production</a>
                        </li>

                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Purchase Manage</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Purchase Item</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Add Purchase</a>
                        </li>

                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Purchase Return</a>
                        </li>

                        <li class="">
                            <a href=#>Return Invoice</a>
                        </li>

                    </ul>
                </li>
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-chart-line"></i>
                        <span>Report</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li class="">
                            <a href=#>Purchase Report</a>
                        </li>

                        <li class="">
                            <a href=#>Stock Report (Product Wise)</a>
                        </li>

                        <li class="">
                            <a href=#>Stock Report (Kitchen)</a>
                        </li>
                        <li class="">
                            <a href=#>Sell Report</a>
                        </li>

                    </ul>
                </li>
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-tags"></i>
                        <span>Reservation</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- single level menu/link -->
                        <li class="">
                            <a href=#>Reservation</a>
                        </li>
                        <li class="">
                            <a href=#>Add Booking</a>
                        </li>

                        <!-- endforeach -->
                    </ul>
                </li>
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-cogs"></i>
                        <span>Setting</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li class="">
                            <a href="#">Payment Method Setting                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Payment Method List</a></li>
                                <li class=""><a href=#>Payment Setup</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">Shipping Method Setting                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Shipping Method List</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">Supplier Manage                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Supplier List</a></li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="#">Manage Table                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Table List</a></li>
                                <li class=""><a href=#>Table Setting</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">Customer Type                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Customer Type List</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">Currency                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Currency List</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">Country                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Country List</a></li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="#">State                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>State List</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->
                <li class="treeview ">

                    <a href="javascript:void(0)">
                        <i class="fas fa-tags"></i>
                        <span>Unit and Ingredients</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Unit Measurement                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Unit Measurement List</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->

                        <!-- multilevel menu/link -->
                        <!-- extract $label to compare with segment -->
                        <li class="">
                            <a href="#">Manage Ingredients                                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                <li class=""><a href=#>Ingredient List</a></li>

                            </ul>
                        </li>


                        <!-- endif -->
                        <!-- endforeach -->
                    </ul>
                </li>
                <!-- end if -->
                <!-- end foreach -->


                <!-- *************************************
                **********ENDS OF CUSTOM MODULES*********
                ************************************* -->

                <li class="header">Default </li>

                <li class="treeview ">
                    <a href="#">
                        <i class="fas fa-user"></i><span>User</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=#>Add User</a></li>
                        <li><a href=#>User List</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href="#">
                        <i class="fas fa-user"></i><span>SMS Setting</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=#>SMS Configuration</a></li>
                        <li><a href=#>SMS Template</a></li>
                    </ul>
                </li>
                <li class="treeview ">
                    <a href=#><i class="fas fa-star"></i> <span>Coupon List</span></a>
                </li>
                <li class="treeview ">
                    <a href=#><i class="fas fa-flag"></i><span>Customer Rating</span></a>
                </li>

                <li class="treeview ">
                    <a href="#">

                        <i class="fas fa-user-lock"></i><span>Role Permission</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=#>Permission Setup</a></li>
                        <li><a href=#>Add Role</a></li>
                        <li><a href=#>Role List</a></li>
                        <li><a href=#>User Access Role</a></li>

                    </ul>
                </li>

                <li class="treeview ">
                    <a href=#><i class="fas fa-flag"></i> <span>Language</span>
                    </a>
                </li>

                <!--<li class="treeview ">
                    <a href=""><i class="fa fa-database"></i> <span></span>
                    </a>
                </li>-->

                <li class="treeview ">
                    <a href=#><i class="fas fa-cog"></i><span>Application Setting</span>
                    </a>
                </li>
                <li class="treeview ">
                    <a href="#">
                        <i class="fas fa-sync-alt"></i><span>Web Setting</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=#>Common Setting</a></li>
                        <li><a href=#>Banner Setting</a></li>
                        <li><a href=#>Menu Setting</a></li>
                        <li><a href=#>Widget Setting</a></li>
                        <li><a href=#>Email Setting</a></li>
                        <li><a href=#>Subscribe List</a></li>
                    </ul>
                </li>
                <!-- ends of admin area -->

                <li class="treeview ">
                    <a href="#">
                        <i class="fas fa-envelope-open"></i><span>Message</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=#>New</a></li>
                        <li><a href=#>Inbox</a></li>
                        <li><a href=#>Sent</a></li>
                    </ul>
                </li>
            </ul>
        </div> <!-- /.sidebar -->            </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon"><i class="fas fa-home"></i></div>
            <div class="header-title">
                <h1> <!--/--> Home</h1>
                <small>Home</small>
            </div>
        </section>


        <!-- Main content -->
        <div class="content">
            <!-- load messages -->
            <!-- load custom page -->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">198</span> <span class="slight"> </span></h2>
                                <div style="font-size:15px">Lifetime Orders</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">0</span> <span class="slight"> </span></h2>
                                <div style="font-size:15px">Today Order</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">0</span></h2>
                                <div style="font-size:15px">Today Sell</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">105</span> <span class="slight"> </span></h2>
                                <div style="font-size:15px">Total Customer</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">52</span></h2>
                                <div style="font-size:15px">Total Delivered</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="panel panel-bd" style="height:100px">
                        <div class="panel-body">
                            <div class="statistic-box text-center">
                                <h2><span class="count-number">3</span> <span class="slight"> </span></h2>
                                <div style="font-size:15px">Total Reservation</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <!-- Latest Order -->
                <div class="col-sm-12 col-md-4">
                    <div class="panel panel-bd ">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Latest Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner1">
                                <div class="message_widgets">
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Darao </strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 125896</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(W0004)</a></p>
                                        <p class="inbox-item-text">Table No.: </p>
                                        <p class="inbox-item-text">Time.: 17:34:34</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Abc Bvc</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 02586695</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(W0001)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 15:46:04</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Hghj</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 9566</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0199)</a></p>
                                        <p class="inbox-item-text">Table No.: Table 1</p>
                                        <p class="inbox-item-text">Time.: 08:36:07</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Lahiru Sasanka</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 0750894484</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0198)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 03:44:30</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0197)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 10:19:38</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>#
                                        <p class="inbox-item-text">Order No.: <a href=#>(0196)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:32:18</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Gg </strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 99</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0195)</a></p>
                                        <p class="inbox-item-text">Table No.: table 7</p>
                                        <p class="inbox-item-text">Time.: 08:18:24</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Gg </strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 99</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0194)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:08:58</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Gg </strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 99</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0193)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:03:22</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Gg </strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 99</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0192)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:02:03</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0191)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 06:54:40</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0190)</a></p>
                                        <p class="inbox-item-text">Table No.: table 9</p>
                                        <p class="inbox-item-text">Time.: 18:33:25</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Lareina Travis</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: +1 (672) 867-6174</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0189)</a></p>
                                        <p class="inbox-item-text">Table No.: </p>
                                        <p class="inbox-item-text">Time.: 14:59:37</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0188)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:18:52</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0184)</a></p>
                                        <p class="inbox-item-text">Table No.: table 9</p>
                                        <p class="inbox-item-text">Time.: 16:19:04</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Latest Reservation -->
                <div class="col-sm-12 col-md-4">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Latest Reservation</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner1">
                                <div class="message_widgets">
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : dg</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8812953781</p>
                                        <p class="inbox-item-text">Date.: <a href=#>(2019-06-13)</a></p>
                                        <p class="inbox-item-text">Table No.: table 6</p>
                                        <p class="inbox-item-text">Time.: 04:00:00</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : sam</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 454545</p>
                                        <p class="inbox-item-text">Date.: <a href=#>(2019-06-12)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 22:20:15</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : r232r</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 4353454354</p>
                                        <p class="inbox-item-text">Date.: <a href=#>(2019-06-11)</a></p>
                                        <p class="inbox-item-text">Table No.: Table 2</p>
                                        <p class="inbox-item-text">Time.: 13:30:30</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Online Order -->
                <div class="col-sm-12 col-md-4">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Latest Online Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner1">
                                <div class="message_widgets">
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : test test</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 0564454234234</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0005)</a></p>
                                        <p class="inbox-item-text">Table No.: </p>
                                        <p class="inbox-item-text">Time.: 11:33:44</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Hhhh Ghhh</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 17110488</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0003)</a></p>
                                        <p class="inbox-item-text">Table No.: </p>
                                        <p class="inbox-item-text">Time.: 23:00:50</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : demo test</strong></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0002)</a></p>
                                        <p class="inbox-item-text">Table No.: </p>
                                        <p class="inbox-item-text">Time.: 11:23:14</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Monthly Sales Amount and Order -->
                <div class="col-sm-12 col-md-12">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Monthly Sales Amount and Order</h4>
                                <ul class="nav nav-tabs pull-right order_status" style="margin-top: -30px">
                                    <li><input name="yearmonth" id="datepicker3" class="form-control datepicker3" type="text" placeholder="Month" value="" readonly="readonly"></li>
                                    <li><input type="button"  class="btn btn-success" name="search" value="Search" onclick="searchmonth()"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body" id="salechart">
                            <canvas id="lineChart" height="140"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Online Vs Offline Order and sales -->
                <div class="col-sm-12 col-md-8">
                    <div class="panel panel-bd">

                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Online Vs Offline Order and sales</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="barChart" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Pending Order</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner">
                                <div class="message_widgets">
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Abc Bvc</strong><span class="profile-status away pull-right"></span></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 02586695</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(W0001)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 15:46:04</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Hghj</strong><span class="profile-status away pull-right"></span></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 9566</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0199)</a></p>
                                        <p class="inbox-item-text">Table No.: Table 1</p>
                                        <p class="inbox-item-text">Time.: 08:36:07</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Abd</strong><span class="profile-status away pull-right"></span></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 0750894484</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0198)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 03:44:30</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong><span class="profile-status away pull-right"></span></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0197)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 10:19:38</p>

                                    </div>
                                    <div class="inbox-item">
                                        <p style="margin:0;padding:0;"><strong class="inbox-item-author">Name : Walkin</strong><span class="profile-status away pull-right"></span></p>
                                        <!--<span class="inbox-item-date">-2018-12-24</span>-->
                                        <p class="inbox-item-text">Phone: 8801717426371</p>
                                        <p class="inbox-item-text">Order No.: <a href=#>(0196)</a></p>
                                        <p class="inbox-item-text">Table No.: table 8</p>
                                        <p class="inbox-item-text">Time.: 08:32:18</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart js -->
            <script src="js/Chart.min.js" type="text/javascript"></script>


            <script src="js/style.js" type="text/javascript">

            </script>                </div> <!-- /.content -->


    </div> <!-- /.content-wrapper -->


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            4th Floor, Mannan plaza
        </div>

        <strong>
            Copyright @2019<div style="display: none">
                <a href="http://www.dizilag.com" title="porno izle" target="_blank">porno izle</a>
            </div>                </strong>
        <a href="http://restaurant.bdtask.com/dashboard/home">
            Muscat Grills</a>
    </footer>


</div> <!-- ./wrapper -->

<!-- Start Core Plugins-->

<!-- jquery-ui -->
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap tag input-->
<script src="js/bootstrap-tagsinput.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="js/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="js/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="js/fastclick.min.js" type="text/javascript"></script>
<!-- Select2 -->
<script src="js/select2.min.js" type="text/javascript"></script>
<!-- bootstrap timepicker -->
<script src="js/jquery-ui-sliderAccess.js" type="text/javascript"></script>
<script src="js/jquery-ui-timepicker-addon.min.js" type="text/javascript"></script>
<!-- tinymce js -->
<script src="js/tinymce.min.js" type="text/javascript"></script>
<!-- dataTables js -->
<script src="js/dataTables.min.js" type="text/javascript"></script>

<!-- AdminBD frame -->
<script src="js/frame.js" type="text/javascript"></script>
<!-- End Core Plugins -->

<!-- Dashboard js -->
<script src="js/dashboard.js" type="text/javascript"></script>
<!-- End Theme label Script-->
<script>
    var baseurl='http://restaurant.bdtask.com/';
</script>


<!-- Include module Script -->
<script src=js/script.js type="text/javascript"></script><script src=js/script1.js type="text/javascript"></script><script src=js/script2.js type="text/javascript"></script><script src=js/script3.js type="text/javascript"></script><script src=js/script4.js type="text/javascript"></script><script src=js/script4.js type="text/javascript"></script><script src=js/script5.js type="text/javascript"></script><script src=js/script6.js type="text/javascript"></script><script src=js/script7.js type="text/javascript"></script><script src=js/script8.js type="text/javascript"></script>    </body>
</html>

