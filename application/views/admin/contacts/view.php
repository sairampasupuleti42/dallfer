<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Contact Requests
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/dashboard/') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Contact Requests</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header"><h3 class="box-title">Posts</h3>
                        <div class="box-tools">
                            <a href="<?php echo base_url('admin/contacts/'); ?>" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <h3>Request from <?php echo @$contact['contact_request_name'] ?></h3>
                        <div class="well">
                            <p><?php
                                echo @$contact['contact_request_message']
                                ?>
                            </p>
                            <p><i class="fa fa-calendar-o"></i> <?php echo date('d /m/ Y ',strtotime($contact['contact_requested_on']))?> @ <?php echo date('H:i:s A ',strtotime($contact['contact_requested_on']))?> </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>