<?php
function myToolls($myTools) {
foreach($myTools as $tool) { ?>
<li>
    <p><?php echo $tool; ?></p>
    <p><img src="../../images/<?php echo $tool['slug']; ?>"  alt="<?php echo $tool; ?>" /></p>
</li>
<?php
}
}
?>