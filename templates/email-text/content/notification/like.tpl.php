<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->language()->_('Hi! We wanted to let you know that *%s* liked the post *%s*', [$annotation['owner_name'], $post->getNotificationTitle()]) ?><br>
Hi! We wanted to let you know that *<?php echo $annotation['owner_name']?>* liked the post *<?php echo $post->getNotificationTitle()?>*<br>

<?php echo \Idno\Core\Idno::site()->language()->_('View post:') ?> <?php echo $post->getDisplayURL()?>
<?php echo "\n\n" . \Idno\Core\Idno::site()->language()->getLanguage(); ?>
<?php
    unset($this->vars['notification']);
