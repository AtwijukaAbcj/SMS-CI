<?php

/* 
 *  Author: Ronash Dhakal
 *  Project: Hotel Management NBPI
 *  Group: Ronash, Bikash, Dipendra, Sumit

*/

?><!-- Visit "codeastro.com" for more projects! -->

<style>
/* Rounded Sidebar */
.rounded-sidebar {
    border-radius: 15px; /* Rounded corners for the entire sidebar */
    overflow: hidden; /* Ensure content stays within the rounded borders */
    margin: 10px; /* Space around the sidebar */
    background-color: #222d32; /* Match the sidebar background color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: add shadow for better appearance */
}

/* Round the User Profile Image */
.rounded-sidebar .user-panel img {
    border-radius: 50%; /* Circular profile picture */
}

/* Main Menu Items with Rounded Corners */
.rounded-sidebar .sidebar-menu > li > a {
    border-radius: 10px; /* Rounded corners for menu items */
    margin: 5px 10px; /* Space around the menu items */
    padding: 10px; /* Padding inside the menu items */
    background-color: #1a2226; /* Background color of menu items */
}

/* Hover Effect for Main Menu Items */
.rounded-sidebar .sidebar-menu > li > a:hover {
    background-color: #3c8dbc; /* Background color on hover */
    color: #ffffff; /* Text color on hover */
}

/* Submenu Styling with Rounded Corners */
.rounded-sidebar .sidebar-menu .treeview-menu {
    border-radius: 10px; /* Rounded corners for submenus */
    margin: 5px 10px; /* Space around submenus */
    background-color: #2c3b41; /* Background color for submenus */
    padding: 5px; /* Padding inside submenus */
}

/* Submenu Items with Rounded Corners */
.rounded-sidebar .sidebar-menu .treeview-menu > li > a {
    border-radius: 8px; /* Rounded corners for submenu items */
    margin: 3px 10px; /* Space around submenu items */
    padding: 8px; /* Padding inside the submenu items */
    background-color: #2a3a48; /* Background color of submenu items */
}

/* Hover Effect for Submenu Items */
.rounded-sidebar .sidebar-menu .treeview-menu > li > a:hover {
    background-color: #3c8dbc; /* Background color on hover */
    color: #ffffff; /* Text color on hover */
}

/* Container holding the entire sidebar and menu */
.sidebar-container {
    border-radius: 20px; /* Rounded corners for the entire container */
    padding: 15px; /* Space inside the container */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* Optional: add shadow for better appearance */
    background-color: #222d32; /* Match the container background color */
}
</style>

<div class="sidebar-container">
    <aside class="main-sidebar rounded-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>uploads/pro_pic/<?php echo  $this->session->userdata('pro_pic');  ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo  $this->session->userdata('full_name'); ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo  $this->session->userdata('role'); ?></a>
                </div>
            </div><!-- Visit "codeastro.com" for more projects! -->

            <!-- Sidebar menu: style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li>
                    <a href="<?php echo base_url() ?>">
                        <i class="fa fa-dashboard"></i> <span>Home</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa fa-graduation-cap"></i>
                        <span>Student</span>
                        <span class="label label-primary pull-right"></span>
                        <i class="fa fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <?php if($this->sms->is_allowed('Admin')): ?>
                            <li><a href="<?php echo base_url() ?>student/add"><i class="fa fa-user-plus"></i> Add Student</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo base_url() ?>student/view"><i class="fa fa-info"></i> View Student</a></li>
                        <?php if($this->sms->is_allowed('Admin')): ?>
                            <!--<li><a href="<?php //echo base_url() ?>student/promotion"><i class="fa fa-user-secret"></i> Student Promotions</a></li>-->
                        <?php endif; ?>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa fa-users"></i>
                        <span>Lecturer</span>
                        <span class="label label-primary pull-right"></span>
                        <i class="fa fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <?php if($this->sms->is_allowed('Admin')): ?>
                            <li><a href="<?php echo base_url() ?>teacher/add"><i class="fa fa-user-plus"></i> Add Lecturer</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo base_url() ?>teacher/view"><i class="fa fa-info"></i> View Lecturer</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa fa-user"></i>
                        <span>Parents</span>
                        <span class="label label-primary pull-right"></span>
                        <i class="fa fa fa-angle-down pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <?php if($this->sms->is_allowed('Admin')): ?>
                            <li><a href="<?php echo base_url() ?>parent/add"><i class="fa fa-user-plus"></i> Add Parents</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo base_url() ?>parent/view"><i class="fa fa-info"></i> View Parents</a></li>
                    </ul>
                </li>

                <?php if($this->sms->is_allowed('Admin')): ?>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa fa-th"></i>
                            <span>Program</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>class/manage"><i class="fa fa-building"></i>Manage Programs</a></li>
                            <li><a href="<?php echo base_url() ?>subject/manage"><i class="fa fa-building"></i>Manage Modules</a></li>
                            <li><a href="<?php echo base_url() ?>syllabus"><i class="fa fa-book"></i>Manage Syllabus</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa fa-sticky-note"></i>
                            <span>Exam Section</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>exam/manage"><i class="fa fa-file"></i>Manage Exam</a></li>
                            <?php if($this->sms->is_allowed('Teacher')): ?>
                                <li><a href="<?php echo base_url() ?>exam/insert_marks"><i class="fa fa-file"></i>Entry Marks</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Exam Routine & Result</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>exam/routine"><i class="fa fa-file"></i>Exam Routine</a></li>
                            <li><a href="<?php echo base_url() ?>exam"><i class="fa fa-file"></i>View Result</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Education</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>syllabus"><i class="fa fa-book"></i>Syllabus</a></li>
                            <li><a href="<?php echo base_url() ?>study"><i class="fa fa-file-pdf-o"></i><span> Study Material</span></a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa fa-th"></i>
                            <span>Program</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <?php foreach ($this->sms_class->list_class() as $class_menu): ?>
                                <li><a href="<?php echo base_url("class/".$class_menu->name); ?>"><i class="fa fa-building"></i><?php echo $class_menu->name;  ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if($this->sms->is_allowed('Admin')): ?>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa fa-usd"></i>
                            <span>Accounting Section</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>account/manage"><i class="fa fa-credit-card"></i>Manage Fees</a></li>
                            <li><a href="<?php echo base_url() ?>account/fees"><i class="fa fa-credit-card"></i>Fees Payment</a></li>
                        </ul>
                    </li>
                <?php endif; ?>

                <?php if($this->sms->is_allowed('Admin')): ?>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa fa-newspaper-o"></i>
                            <span>Library</span>
                            <span class="label label-primary pull-right"></span>
                            <i class="fa fa fa-angle-down pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url() ?>library/manage"><i class="fa fa-save"></i>Manage Library</a></li>
                            <li><a href="<?php echo base_url() ?>library"><i class="fa fa-book"></i><span> Library</span></a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo base_url() ?>library"><i class="fa fa-newspaper-o"></i><span> Library</span></a></li>
                <?php endif; ?>

                <li><a href="<?php echo base_url() ?>notice"><i class="fa fa-bullhorn"></i><span> Notice Board</span></a></li>
                <li><a href="<?php echo base_url() ?>mail"><i class="fa fa-envelope"></i> <span> Message</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
</div>
