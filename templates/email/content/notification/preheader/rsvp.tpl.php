<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->language()->_('%s RSVPed %s.', [$annotation['owner_name'], $annotation['object']->getNotificationTitle()]) ?>

<?php
    unset($this->vars['notification']);
