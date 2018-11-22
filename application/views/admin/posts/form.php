<style>
    .mce-branding{
        display: none !important;
    }
</style>
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
                    <div class="box-header">
                        <h3 class="box-title">Add Post</h3>
                        <div class="box-tools"><a href="<?php echo base_url() ?>posts/add/" class="btn btn-danger">
                                Back</a></div>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-12">
                            <form class="form-horizontal" id="postForm" action="" method="post" enctype="multipart/form-data">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Post Title
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm required" name="news_title"
                                                   placeholder="Enter post Tilte"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Post Alias Name <span class="text-danger">(English only)</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm required" name="post_slug"
                                                   placeholder="Enter Alias  Name"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Post Video <span class="text-danger">(YouTube Url only)</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control input-sm " name="post_video"
                                                   placeholder="Enter Video Url"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">
                                            Image
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control input-sm required" name="image"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
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
                                </div>
                                <div class="col-sm-1 col-md-offset-11">
                                    <div class="form-group">
                                        <button class="btn btn-success btn-lg">Save</button>
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
            images_upload_url: '/api/upload-post-image',

            images_dataimg_filter: function(img) {
                return img.hasAttribute('internal-blob');
            },

        });

    });
</script>