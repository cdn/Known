<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$target       = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->language()-_('%s mentioned you on %s.', [$annotation['owner_name'], $annotation['permalink']]);?>

<?php
    unset($this->vars['notification']);
