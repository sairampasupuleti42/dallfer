<style>
    .mce-branding{
        display: none !important;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            About
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">About</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Update About </h3>
                        <div class="box-tools"><a href="<?php echo base_url() ?>admin/dashboard/" class="btn btn-danger">
                                Back</a></div>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-8">
                            <form class="form-horizontal" id="postForm" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="pk_id" value="<?php echo !empty($about['pk_id']) ?$about['pk_id']:'';?>"/>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Image
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control input-sm <?php echo !empty($about['pk_id']) ? '':'required';?>" name="image" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">
                                            Video (Youtube Url)
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm " <?php echo !empty($about['video']) ?$about['video']:'';?> name="video" placeholder="Paste youtube url here"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label">
                                            Mini Description
                                        </label>
                                        <div class="col-sm-12 col-md-offset-2">
                                            <textarea cols="108" rows="10" style="resize: none" class="form-control input-sm required ckeditor" name="description_mini"><?php echo !empty($about['description_mini']) ?$about['description_mini']:'';?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-sm-1 control-label">
                                            Description
                                        </label>
                                        <div class="col-sm-12 col-md-offset-2">
                                            <textarea cols="108" rows="20" style="resize: none" class="form-control input-sm required ckeditor" name="description"><?php echo !empty($about['description']) ?$about['description']:'';?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1 col-md-offset-11">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-md">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
            images_upload_url: '/admin/upload-post-image',

            images_dataimg_filter: function(img) {
                return img.hasAttribute('internal-blob');
            },

        });

    });
</script>