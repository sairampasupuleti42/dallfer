<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Gallery
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header"><h3 class="box-title">Gallery</h3>
                        <div class="box-tools"><a href="<?php echo base_url() ?>admin/gallery/add/"
                                                  class="btn btn-primary">Create
                                Gallery</a></div>
                    </div>
                    <div class="box-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th class="w-md">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($galleries)) {
                                    $i = 1;
                                    foreach ($galleries as $gallery) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <p class="w-xxl"><?php echo !empty($gallery['gallery_name']) ? trim($gallery['gallery_name']) : ""; ?></p>
                                            </td>
                                            <td><?php
                                                $images = glob(FCPATH . $gallery['gallery_path'] . '/' . "*.*");
                                                $i = 0;
                                                foreach ($images as $image) {
                                                    if ($i == 0) {
                                                        $image = str_replace(FCPATH, '', $image);

                                                        ?>

                                                        <a href="<?php echo base_url('gallery/' . $gallery['gallery_slug'] . '/'); ?>">

                                                            <img src="<?php echo base_url().$image ?>"
                                                                 alt="<?php echo $gallery['gallery_name'] ?>"
                                                                 class="img-responsive" width="80"/>


                                                        </a>

                                                        <?php
                                                    }
                                                    $i++;
                                                } ?>
                                            </td>


                                            <td>
                                                <a href="<?php echo base_url() ?>admin/gallery/edit/<?php echo $gallery['gallery_id']; ?>"
                                                   title='Edit'
                                                   class="btn btn-sm btn-default"><i
                                                            class="fa fa-pencil text-info"></i></a>
                                                <a href="<?php echo base_url() ?>admin/gallery/?act=status&gallery_id=<?php echo $gallery['gallery_id']; ?>&sta=<?php echo ($gallery['is_active'] == "1") ? "0" : "1"; ?>"
                                                   title='<?php echo ($gallery['is_active'] == "1") ? "Active" : "Inactive"; ?>'
                                                   class="btn btn-sm btn-default"><i
                                                            class="fa fa-star <?php echo ($gallery['is_active'] == "1") ? "text-success" : "text-danger"; ?>"></i></a>

                                                <a href="<?php echo base_url() ?>admin/gallery/?act=del&gallery_id=<?php echo $gallery['gallery_id']; ?>"
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
                                        <td colspan="4">
                                            <div class="text-center text-danger">No data found !</div>
                                        </td>
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