<style>
    .mce-branding {
        display: none !important;
    }
</style>
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
                    <div class="box-header">
                        <h3 class="box-title">
                            <?php echo !empty($this->uri->segment(3)) ? ucwords($this->uri->segment(3)) :'Add';?> Gallery</h3>
                        <div class="box-tools">
                            <a href="<?php echo base_url() ?>admin/gallery/"
                                                  class="btn btn-danger">
                                Back</a></div>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-8">
                            <form class="form-horizontal" id="postForm" action="" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="gallery_id"
                                       value="<?php echo !empty($gallery['gallery_id']) ? $gallery['gallery_id'] : ''; ?>"/>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">
                                            Gallery Name
                                        </label>
                                        <div class="col-sm-6">
                                            <?php
                                            if(!empty($gallery['gallery_id'])) {
                                                ?>
                                                <input type="hidden" name="gallery_slug"
                                                       value="<?php echo !empty($gallery['gallery_slug']) ? $gallery['gallery_slug'] : ''; ?>"/>
                                                <?php
                                            }
                                            ?>
                                            <input type="text" class="form-control input-sm required"
                                                   name="gallery_name"
                                                   placeholder="Enter Gallery Name"
                                                   value="<?php echo !empty($gallery['gallery_name']) ? $gallery['gallery_name'] : ''; ?>"/>
                                        </div>
                                    </div>
                                </div><!--
                                <div class="col-sm-12 hide">
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">
                                            Gallery Alias Name <span class="text-danger">(English only)</span>
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control input-sm required"
                                                   name="gallery_slug"
                                                   placeholder="Enter Alias Gallery Name"
                                                   value="<?php /*echo !empty($gallery['gallery_slug']) ? $gallery['gallery_slug'] : ''; */?>"/>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">
                                            Images
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control input-sm <?php echo !empty($gallery['gallery_id']) ? '' : 'required'; ?>" name="images[]"
                                                   multiple="multiple"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label">
                                            Description
                                        </label>
                                        <div class="col-sm-11 col-md-offset-1">
                                            <textarea cols="108" rows="7" style="resize: none"
                                                      class="form-control input-sm required ckeditor"
                                                      name="description"></textarea>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="col-sm-1 col-md-offset-11">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-sm">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <?php if(!empty($gallery)){
                            ?>
                        <div class="col-md-12">
                            <?php

                            $images = glob(FCPATH . $gallery['gallery_path'] . '/' . "*.*");
                            foreach ($images as $image) {
                                $image = str_replace(FCPATH, '', $image);
                                ?>
                                <div class="col-md-2 col-sm-3 col-xs-6">
                                    <a class="zoom-gallery" href="<?php echo $image; ?>">
                                        <div class="img">
                                            <img src="<?php echo base_url().$image; ?>"
                                                 alt="<?php echo $gallery['gallery_name'] ?>" class="img-responsive"/>
                                        </div>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $("#postForm").validate();
        tinymce.init({
            selector: "textarea.ckeditor",
            theme: "modern",
            plugins: ["advlist  autolink lists link image  imagetools charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
            convert_urls: false,
            content_css: 'http://skin.tinymce.com/css/preview.content.css',
            toolbar: "insertfile undo redo code | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | upload ",
            images_upload_url: '/api/upload-post-image',

            images_dataimg_filter: function (img) {
                return img.hasAttribute('internal-blob');
            },

        });

    });
</script>