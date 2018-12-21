 <section class="content-header">
  <h1>
    Dashboard
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>10</h3>

            <p>Newest Data</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-image-o"></i>
          </div>
          <a href="/templates" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>132</h3>

            <p>Total Data</p>
          </div>
          <div class="icon">
            <i class="fa fa-smile-o"></i>
          </div>
          <a href="/sticker" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>1</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>18</h3>

            <p>Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Shirobyte</a>
        </div>
      </div>
      <!-- ./col -->
    </div>
       <div class="row">
        <!-- Left col -->
        <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              
              <li class="pull-left header"><i class="fa fa-inbox"></i>User</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- high chart - user -->
              
                <div id="usercount" style="height: 300px; min-width: 310px"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          
          <!-- /.box -->

        </section>
        <section class="col-lg-6 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              
              <li class="pull-left header"><i class="fa fa-inbox"></i>Location Count</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div id="locationcount" style="min-width: 310px; height: 300px; max-width: 600px; margin: 0 auto"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          
          <!-- /.box -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>


</section>
 <script data-main="<?php echo base_url()?>assets/js/main/main-dashboard" src="<?php echo base_url()?>assets/js/require.js"></script>