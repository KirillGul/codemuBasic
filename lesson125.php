<?php
include 'include.php';

//125.1
$show = true;
if ($show) {
?>

    <div>
	    <p>text1</p>
	    <p>text2</p>
	    <p>text3</p>
    </div>
<?php } ?>

<?php
//125.2
$show = true;
if ($show) {
?>
    <div>
	    <p>text+</p>
	    <p>text+</p>
	    <p>text+</p>
    </div>
<?php } else { ?>
    <div>
	    <p>text-</p>
	    <p>text-</p>
	    <p>text-</p>
    </div>
<?php } ?>

<?php
//125.3
$div = 1;
if ($div == 1) {
?>
    <div>
	    <p>text1</p>
	    <p>text1</p>
	    <p>text1</p>
    </div>
<?php } elseif ($div == 2) { ?>
    <div>
	    <p>text2</p>
	    <p>text2</p>
	    <p>text2</p>
    </div>
<?php } else { ?>
    <div>
	    <p>text-</p>
	    <p>text-</p>
	    <p>text-</p>
    </div>
<?php } ?>