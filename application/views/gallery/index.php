<div class="fh5co-section-gray pt-5">
    <div class="container">
        <div class="row">
            <div>
                <h1 class="text-center">Gallery</h1>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <?php
                if (!empty($galleries)) { ?>
                    <ul id="fh5co-portfolio-list">
                        <?php
                        foreach ($galleries as $gallery) {

                            $images = glob(FCPATH . $gallery['gallery_path'] . '/' . "*.*");
                            $i = 0;
                            foreach ($images as $image) {
                                if ($i == 0) {
                                    $image = str_replace(FCPATH, '', $image);
                                    ?>
                                    <li class="one-third animate-box" data-animate-effect="fadeIn"
                                        style="background-image: url(<?php echo base_url(@$image) ?>); ">
                                        <a href="<?php echo base_url('gallery/') . @$gallery['gallery_slug'] ?>"
                                           class="color-4">
                                            <div class="case-studies-summary">
                                                <span>Events</span>
                                                <h2><?php echo !empty($gallery['gallery_name']) ? trim($gallery['gallery_name']) : ""; ?></h2>
                                            </div>
                                        </a>
                                    </li>
                                    <?php
                                    $i++;
                                }
                            }
                        }
                        ?>
                    </ul>
                    <?php
                } else {
                    ?>
                    <div class='text-center'>
                        <h3>Gallery doesn't exists !</h3>
                        <a href="<?php echo base_url();?>" class="btn btn-default">Back to home</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                <a href="#" class="btn btn-primary btn-lg hide">See Gallery</a>
            </div>
        </div>
    </div>
</div>
