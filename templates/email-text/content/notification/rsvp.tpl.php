<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
Hi! We wanted to let you know that *<?php echo $annotation['owner_name']?>* RSVPed to the event *<?php echo $post->getNotificationTitle()?>*.

Here's what they said:

> <?php echo strip_tags(preg_replace('#<br\s*/?>#i', "\n> ", str_replace("\n", "\n> ", $annotation['content']))); ?>

<?php

if (!empty($post)) {

    echo \Idno\Core\Idno::site()->language()->_('View post:');
    echo ' ' . $post->getDisplayURL();

}

?>
<?php
    unset($this->vars['notification']);
