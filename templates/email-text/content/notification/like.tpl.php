<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
Hi! We wanted to let you know that *<?php echo $annotation['owner_name']?>* liked the post *<?php echo $post->getNotificationTitle()?>*<br>

<?php echo \Idno\Core\Idno::site()->language()->_('View post:') ?> <?php echo $post->getDisplayURL()?>
<?php
    unset($this->vars['notification']);
