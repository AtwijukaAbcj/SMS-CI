<?php
/* 
 *  @package		Kodstack
 *  Author:         Ronash Dhakal
 */

?>
<!-- Visit "codeastro.com" for more projects! -->
<section class="content-header" >
    <h1>
<?php echo $page_title; ?>
        <small><?php
        if (isset($page_slogan)) {
            echo $page_slogan;
        }
        ?></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a><i class="fa fa-book"></i> Study Material</a></li>

    </ol>
</section>
<section class="content container-fluid">
   	
  <div class="row">

        <div class="col-md-9 col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#syllabus" data-toggle="tab">Materials</a></li>

                 
                   

                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="syllabus">
                        <!-- Post -->
                        <div class="row">
                           
                            <div class="col-sm-8">
                                <div id="initial"><h4>Select Program and Subject to view available materials.</h4></div>
                                <div id="listMaterial">
                                    
                                </div>
                            </div>
                        </div>
                       
                        <!-- /.post -->

                    </div>

                   
  
                    </div>
             
              

                </div>
                <!-- /.tab-content -->
            </div>
      
      <div class="col-md-3 col-sm-12">
           <div id="add_form">
                                <?php 

                                   $this->load->view('pages/study/part/add_form');
                                   ?>
                                </div>
      </div>
        </div>

        </div>

    </div>
</section>

 
