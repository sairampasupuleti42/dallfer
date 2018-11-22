<link href="<?php echo base_url();?>assets/css/magnific-popup.css" rel="stylesheet"/>
<div class="fh5co-section-gray pt-5">
    <div class="container">
        <div class="row">
            <div>
                <h1 class="text-center"><?php echo @$gallery['gallery_name']; ?></h1>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div id="ri-grid" class="ri-grid ri-grid-size-1 ri-shadow">
                <?php if (!empty($gallery)) {
                    ?>
                    <ul class="list-unstyled">
                        <?php

                        $images = glob(FCPATH . $gallery['gallery_path'] . '/' . "*.*");
                        foreach ($images as $image) {
                            $image = str_replace(FCPATH, '', $image);
                            ?>
                            <li class="w-20per">
                                <a href="#" class="galleryItem" data-group="1">
                                    <img src="<?php echo base_url($image);?>"
                                         alt="<?php echo @$gallery['gallery_name']; ?>Image" class="wh-200"/>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script>
    var groups = {};
    $('.galleryItem').each(function () {
        var id = parseInt($(this).attr('data-group'), 10);
        if (!groups[id]) {
            groups[id] = [];
        }
        groups[id].push(this);
    });
    $.each(groups, function () {
        $(this).magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            gallery: {enabled: true}
        })
    });
</script>
