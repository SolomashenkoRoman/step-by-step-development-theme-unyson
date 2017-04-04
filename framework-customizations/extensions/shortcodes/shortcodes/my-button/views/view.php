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

<button
    id="shortcode-<?php echo esc_attr($atts['id']); ?>"
    class="button button-<?php echo $atts['size']; ?> button-<?php echo $atts['style']; ?>">
    <?php echo $atts['label']; ?>
</button>

<?php
$value = array(
    'test' => 1,
    'test_2' => 2,
);
fw_print($value);
//echo fw_html_tag('script', array('src' => '/demo.js'), true);

echo '<div '. fw_attr_to_html(array('id' => 'foo', 'class' => 'bar')) .'>Hello</div>';

$demo = array(
    'a' => array(
        'b' => 'hello'
    )
);

echo fw_akg('a/b', $demo);

$demo = array(
    'a' => array()
);
fw_aks('a/b', 'hello', $demo);
fw_print($demo);

$demo = array(
    'a' => array(
        'b' => array()
    )
);

fw_aku('a/b', $demo);

fw_print($demo);


echo fw_rand_md5();
echo '<br/>';
echo fw_unique_increment();
echo '<br/>';
echo fw_locate_theme_path_uri('/style.css');
echo '<br/>';
echo fw_locate_theme_path('/style.css');

echo '<br/>';


?>