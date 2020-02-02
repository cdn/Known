<?php
$notification = $vars['notification'];
$annotation   = $notification->getObject();
$post         = $notification->getTarget();
?>

<a href="<?php echo $annotation['owner_url']?>"><img src="<?php echo $annotation['owner_image']?>" style="width: 100px; margin-left: 10px; margin-bottom: 10px" align="right"></a><?php echo \Idno\Core\Idno::site()->language()->_('Hi! We wanted to let you know that %s replied to the post %s.',
 ['<strong><a href="' . $annotation['owner_url'] . '">' , $annotation['owner_name'] . '</a></strong>', '<strong><a href="' . $post->getDisplayURL() . '">' . $post->getNotificationTitle() . '</a></strong>']) ?><br>
<br>
<?php echo \Idno\Core\Idno::site()->language()->_("Here's what they said:") ?><br>
<br>
<blockquote>
    <?php echo $annotation['content']?>
</blockquote>
<br class="clearall"><br>
<?php

if (!empty($post)) {

    ?>
<div class="center">
    <a href="<?php echo $post->getDisplayURL()?>" style="background-color:#73B2E3;border:1px solid #73B2E3;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:normal;line-height:40px;text-align:center;text-decoration:none;width:200px;-webkit-text-size-adjust:none;mso-hide:all;"><?php echo \Idno\Core\Idno::site()->language()->_('View post') ?></a>
</div>
    <?php

}

?>
<?php
    unset($this->vars['notification']);
