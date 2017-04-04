<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $data
 */

$unique_id = 'demo-slider-'. fw_unique_increment();
?>
<?php if (isset($data['slides'])): ?>
    <script type="text/javascript">
        jQuery(function($){ $('#<?php echo $unique_id ?>').unslider(); });
    </script>
    <div id="<?php echo $unique_id ?>">
        <ul>
            <?php foreach ($data['slides'] as $slide): ?>
                <li>
                    <?php if ($slide['multimedia_type'] === 'video') : ?>
                        <?php echo fw_oembed_get($slide['src'], $dimensions); ?>
                    <?php else: ?>
                        <img src="<?php echo fw_resize($slide['src'], $dimensions['width'], $dimensions['height']); ?>"
                             alt="<?php echo esc_attr($slide['title']) ?>"
                             width="<?php echo esc_attr($dimensions['width']); ?>"
                             height="<?php echo $dimensions['height']; ?>" />
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>