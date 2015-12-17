<?php
/**
 * Created by PhpStorm.
 * User: yildiz
 * Date: 16.12.15
 * Time: 21:17
 */

require_once 'config.php';
login_required();
$id = (int) $_GET['id'];
$data = query("SELECT body FROM templates WHERE id=$id LIMIT 1");
$template = $data[0]['body'];
?>
<?php echo $template; ?>
<center><button type="button" onclick="self.close();">close window</button></center>
