<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 11:56 AM
 */
if (!defined('FW')) {
    die('Forbidden');
}
?>

<button class="button button-<?php echo $atts['size']; ?> button-<?php echo $atts['style']; ?>">
    <?php echo $atts['label']; ?>
</button>