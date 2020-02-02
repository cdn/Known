<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->language()->_('Hi! We wanted to let you know that %s replied to the post %s.',
['*' . $annotation['owner_name'] . '*', '*' . $post->getNotificationTitle() . '*']); ?>


<?php echo \Idno\Core\Idno::site()->language()->_("Here's what they said:") ?>


> <?php echo strip_tags(preg_replace('#<br\s*/?>#i', "\n> ", str_replace("\n", "\n> ", $annotation['content']))); ?>


<?php

if (!empty($post)) {

    echo '    ' . \Idno\Core\Idno::site()->language()->_('View post:');
    echo ' ' . $post->getDisplayURL();

}

?>
<?php echo "\n\n" . \Idno\Core\Idno::site()->language()->getLanguage(); ?>
<?php
    unset($this->vars['notification']);
