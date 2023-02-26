<?php
/**
 * ACF AJAX подгрузка
 */

add_action("wp_ajax_acf_repeater_show_more", "acf_repeater_show_more");
add_action("wp_ajax_nopriv_acf_repeater_show_more", "acf_repeater_show_more");

function acf_repeater_show_more()
{
    if (!isset($_POST["nonce"]) || !wp_verify_nonce($_POST["nonce"], "my_repeater_field_nonce")) {
        exit;
    }

    if (!isset($_POST["post_id"]) || !isset($_POST["offset"])) {
        return;
    }
    $show = 1;
    $start = $_POST["offset"];
    $end = $start + $show;
    $post_id = $_POST["post_id"];
    ob_start();
    if (have_rows("video_list", $post_id)) {
        $total = count(get_field("video_list", $post_id));
        $count = 0;

        while (have_rows("video_list", $post_id)) {
            the_row();
            if ($count < $start) {
                $count++;
                continue;
            }
            ?>
            <div class="outdoor__item">
                <?php $subtitle = get_sub_field('block_sub_title') ?>
                <?php if (!empty($subtitle)) { ?>
                    <div class="outdoor__item-subtitle"><?php echo $subtitle; ?></div>
                <?php } ?>
                <?php $title = get_sub_field('block_title') ?>
                <?php if (!empty($title)) { ?>
                    <h3 class="outdoor__item-title"><?php echo $title; ?></h3>
                <?php } ?>
                <div class="outdoor__item-main">
                    <div class="outdoor__item-media">
                        <?php $media = get_sub_field('media_file');
                        if ($media['type'] == "video"):?>
                            <?php $video_placeholder_image = get_sub_field('video_placeholder_image');?>
                            <video controls <?php if ($video_placeholder_image) : ?>
                                poster="<?php echo $video_placeholder_image['url']; ?>"
                            <?php endif; ?>>
                                <source src="<?php echo $media['url']; ?>" type="<?php echo $media['type'] . '/' . $media['subtype']; ?>">
                            </video>
                        <?php else:?>
                            <img src="<?php echo $media['url']; ?>" alt="<?php echo $media['alt']; ?>">
                        <?php endif; ?>
                    </div>
                    <div class="outdoor__item-content">
                        <?php $description = get_sub_field('description') ?>
                        <?php if (!empty($description)) { ?>
                            <div class="outdoor__item-description"><?php echo $description; ?></div>
                        <?php } ?>
                        <?php if (have_rows('links')) : ?>
                            <div class="outdoor__item-links">
                                <?php while (have_rows('links')) : the_row(); ?>
                                    <?php $link = get_sub_field('link') ?>
                                    <a class="outdoor__item-link" href="<?php echo $link['url']; ?>"
                                        <?php if($link['target']) : echo 'target="_blank"'; endif; ?>  >
                                        <?php echo $link['title']; ?>
                                    </a>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php
            $count++;
            if ($count == $end) {
                break;
            }
        }
    }
    $content = ob_get_clean();
    $more = false;
    if ($total > $count) {
        $more = true;
    }
    echo json_encode(array("content" => $content, "more" => $more, "offset" => $end));
    exit;
}
