<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Upload Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('admin/dashboard/') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Upload Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header"><h3 class="box-title"></h3>
                        <div class="box-tools">
                            <a href="<?php echo base_url('admin/dashboard/'); ?>" class="btn btn-danger">Back to
                                dashboard</a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?php
                                echo getMessage();
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="well">
                                    <form method="post" id="updoc"
                                          action="<?php echo base_url('admin/upload-profile'); ?>"
                                          enctype="multipart/form-data">
                                        <input type="hidden" name="UP" value="TRUE"/>
                                        <div class="form-group">
                                            <label for="profile">Choose file</label>
                                            <input class="form-control required" id="profile" name="profile"
                                                   accept="application/pdf" type="file"/>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" id="btnUpload">Upload</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Sr.no</th>
                                        <th>Profile</th>
                                        <th>Uploaded On</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (!empty($documents)) {
                                        $i = 1;
                                        foreach ($documents as $doc) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>
                                                    <?php if (file_exists(str_replace(base_url(), FCPATH, $doc['doc_path']))) { ?>
                                                        <a href="<?php echo @$doc['doc_path']; ?>"
                                                           download="Profile-<?php echo date('dmYhis') ?>"><i
                                                                    class="fa fa-file-pdf-o fa-2x text-success"></i> </a>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <i class="fa fa-file-pdf-o fa-2x text-danger" title="Document not found !"></i>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo date('d-m-Y', strtotime($doc['doc_created_on'])) ?></td>
                                                <td>
                                                    <a href="<?php echo base_url() ?>admin/upload-profile/?act=del&doc_id=<?php echo $doc['doc_id']; ?>"
                                                       title='Delete'
                                                       onclick="return window.confirm('Do You Want to Delete?');"
                                                       class="btn btn-sm btn-default"><i
                                                                class="fa fa-trash text-danger"></i></a></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4">
                                                <div class="text-danger text-center">No data found !</div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
