<?php
function myToolls($myTools) {
foreach($myTools as $tool => $item) { ?>
<li>
    <p><?php echo $tool; ?></p>
    <p><img src="../../images/<?php echo $item['slug']; ?>"  alt="<?php echo $tool; ?>" /></p>
</li>
<?php
}
}
?>