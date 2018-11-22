<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Posts
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Posts</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header"><h3 class="box-title">Posts</h3>
                        <div class="box-tools"><a href="<?php echo base_url() ?>admin/posts/add/" class="btn btn-primary">Create
                                Post</a></div>
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
                                <?php if (!empty($posts)) {
                                    $i = 1;
                                    foreach ($posts as $post) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <p class="w-xxl"><?php echo !empty($post['news_title']) ? trim($post['news_title']) : ""; ?></p>
                                            </td>


                                            <td style="width:120px;height:100px;"
                                                class="w-md"><?php if (!empty($post['thumb_image']) && file_exists(FCPATH  . $post['thumb_image'])) {
                                                    echo '<img src=' . base_url()  . $post['thumb_image'] . ' class="img-table" style="width:80px" />';
                                                } ?>
                                            </td>
                                            <td><a href="<?php echo base_url() ?>admin/posts/edit/<?php echo $post['post_id']; ?>"
                                                   title='Edit'
                                                   class="btn btn-sm btn-default"><i
                                                        class="fa fa-pencil text-info"></i></a> <a
                                                    href="<?php echo base_url() ?>admin/posts/?act=status&post_id=<?php echo $post['post_id']; ?>&sta=<?php echo ($post['is_active'] == "1") ? "0" : "1"; ?>"
                                                    title='<?php echo ($post['is_active'] == "1") ? "Active" : "Inactive"; ?>'
                                                    class="btn btn-sm btn-default"><i
                                                        class="fa fa-star <?php echo ($post['is_active'] == "1") ? "text-success" : "text-danger"; ?>"></i></a>

                                                    <a href="<?php echo base_url() ?>admin/posts/?act=del&post_id=<?php echo $post['post_id']; ?>"
                                                       title='Delete'
                                                       onclick="return window.confirm('Do You Want to Delete?');"
                                                       class="btn btn-sm btn-default"><i
                                                            class="fa fa-trash text-danger"></i></a>


                                            </td>
                                        </tr>
                                        <?php $i++;
                                    }
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