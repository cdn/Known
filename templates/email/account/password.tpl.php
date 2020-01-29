<div style="font-weight: bold; font-size: 30px; line-height: 32px; color: #333" align="center">
    <?php echo \Idno\Core\Idno::site()->language()->_('Forgot your password?') ?>
</div><br>
<hr/>
<br>
<?php echo \Idno\Core\Idno::site()->language()->_('We heard you forgot your password. Don\'t worry. It happens to the best of us.'); ?>
<br><br>
<?php echo \Idno\Core\Idno::site()->language()->_('You can reset your password by clicking the link below (or copy and paste it into your browser).');

$reset_link = \Idno\Core\Idno::site()->config()->getDisplayURL() . 'account/password/reset/?email=' . urlencode($vars['email']) . '&code=' . urlencode($vars['code']);

?>
<br><br>

<a href="<?php echo $reset_link ?>" style="color: #73b2e3; text-decoration: none;"><?php echo $reset_link ?></a>
<br><br>
