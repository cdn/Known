<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->language()->_('%s shared %s.', [$annotation['owner_name'], $post->getNotificationTitle()]) ?>

<?php
    unset($this->vars['notification']);
