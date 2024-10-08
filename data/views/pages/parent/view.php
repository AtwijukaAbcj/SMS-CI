<?php

/* 
 *  Author: Ronash Dhakal
 *  Project: School Managment System
 *  Team: Amrit, Prayash, Ronash, Saroj
 */


?>
 
 <section class="content-header">
      <h1>
        <?php echo $page_title; ?>
        <small><?php if(isset($page_slogan)){ echo $page_slogan;} ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
              
            <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-olive"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Male</span>
              <span class="info-box-number"><?php echo $this->parents->count('male',FALSE); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-olive"><i class="fa fa-female"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Female</span>
              <span class="info-box-number"><?php echo $this->parents->count(FALSE,'female'); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
            
        </div>
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lecturers</h3>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                     <th>Image</th>
                  <th>Full Name</th>
                  <th>Email</th>
                 
                  <th>Gender</th>
                  <th>Contact</th>
                
                  <th>Last Login</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($list_parents as $parent){ 
    ;
  ?>
                    <tr>
 <td><img  class="image img-md img-rounded img-responsive" src="<?php echo base_url("uploads/pro_pic/") . "/" . $parent->pro_pic; ?>"</td>
                                    
                    <?php
     echo '<td>'.$parent->full_name.'</td>';
         echo '<td>'.$parent->email.'</td>';
            
                 echo '<td>'.$parent->gender.'</td>';
             echo '<td>'.$parent->contact.'</td>';
              
                  
                        
                    ?>
 <td><?php if($parent->last_login !=NULL){echo $parent->last_login; }else{ echo "A/C Inactive";} ?></td>
  <td><div class="btn-group">
                  <button type="button" class="btn btn-primary">Action</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="<?php echo base_url('parent/'.$parent->name); ?>" target="_blank">View</a></li>
                      <?php if($this->session->userdata('id')!=$parent->id){ ?>
                    <li><a href="<?php echo base_url('mail/compose/'.$parent->id); ?>"> Send Mail</a></li>
                    <?php } ?>
                    <?php if($this->sms->is_allowed('Teacher')){ ?>
                    <li class="divider"></li>
                    <li><a href="#" onclick="banUser('<?php echo $this->encrypt->encode($parent->id) ?>')">Banned Parent</a></li>
                    <?php } ?>
                  </ul>
                </div></td>
              </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                 
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
   