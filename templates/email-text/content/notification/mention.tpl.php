<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$target       = $notification->getTarget();
?>
<?php echo \Idno\Core\Idno::site()->template()->_('Hi! We wanted to let you know that %s mentioned you on %s', ['*' . $annotation['owner_name']. '*', '*' . $annotation['permalink'] . '*']) ?>

<?php
    unset($this->vars['notification']);
