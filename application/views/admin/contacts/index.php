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
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="w-md">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($contacts)) {
                                    $i = 1;
                                    foreach ($contacts as $contact) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/contacts/view/<?php echo $contact['contact_request_id']; ?>" class="<?php echo ($contact['contact_request_status']=='0') ? 'text-danger':'text-info'?>"><?php echo !empty($contact['contact_request_name']) ? trim($contact['contact_request_name']) : ""; ?></a>
                                            </td>
                                            <td>
                                                <p><?php echo !empty($contact['contact_request_email']) ? trim($contact['contact_request_email']) : ""; ?></p>
                                            </td>
                                            <td>
                                                <a
                                                        href="<?php echo base_url() ?>admin/contacts/view/<?php echo $contact['contact_request_id']; ?>"
                                                        class="btn btn-sm btn-primary"><i
                                                            class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url() ?>admin/contacts/?act=del&cr_id=<?php echo $contact['contact_request_id']; ?>"
                                                   title='Delete'
                                                   onclick="return window.confirm('Do You Want to Delete?');"
                                                   class="btn btn-sm btn-default"><i
                                                            class="fa fa-trash text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    }
                                }else{
                                    ?>
                                    <tr>
                                        <td colspan="4"><div class="text-center text-danger">No data found !</div></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <?php echo !empty($PAGING) ? $PAGING : ""; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->