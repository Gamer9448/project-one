<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

?>
<style type="text/css">
    .hide {
        display: none;
    }
</style>
<style>
    body{
        background-color: #721c24;
    }
</style>
<script type="text/javascript">
    function showhide(n)
    {
        if (document.getElementById('otd'+n).style.display=='inline')
            document.getElementById('otd'+n).style.display='none';
        else
            document.getElementById('otd'+n).style.display='inline';
        return false;
    }
</script>
<?php
$count = 1;

foreach ($jsonDataDecoded['items'] as $key => $item) {
if($depth < $count){
    break;
}
    $count++;

?>
<div><a href="#" onclick="return showhide(<?php echo $key ?>);"><img src="" alt="+" /></a>раздел</div>
<div id="otd<?php echo $key ?>" class="hide">
    <ul>
        <li><?php echo $item['name']; ?></li> <br>
        <li><?php echo $item['type']; ?></li> <br>
        <li><?php echo $item['value']; ?></li> <br>
    </ul>
</div>
<?php
        }
?>
