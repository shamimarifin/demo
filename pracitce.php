<?php



<?php $options = get_option( 'cartoonsnft_theme_customizer' ); ?>
<div class="fixed-social-icons">
	<?phpif ( $options['social_icons_acc']['fa_instagram_switcher'] ): ?>
        <a href="">
            <i class="fa-brands fa-instagram"></i></a>
	<?phpendif; ?>

	<?phpif ( $options['social_icons_acc']['fa-facebook-switcher'] ): ?>
        <a href="<?php echo $options['social_icons_acc']['fa-facebook-url'] == '' ? 'javascript:void' : $options['social_icons_acc']['fa-facebook-url']; ?>">
            <i class="fa-brands fa-facebook-f"></i></a>
	<?phpendif; ?>

	<?phpif ( $options['social_icons_acc']['fa-twitter-switcher'] ): ?>
        <a href="<?php echo $options['social_icons_acc']['fa-twitter-url'] == '' ? 'javascript:void' : $options['social_icons_acc']['fa-twitter-url']; ?>">
            <i class="fa-brands fa-twitter"></i></a>
	<?phpendif; ?>

	<?phpif ( $options['social_icons_acc']['fa-linkedin-in-switcher'] ): ?>
        <a href="<?phpecho $options['social_icons_acc']['fa-linkedin-in-url'] == '' ? 'javascript:void' : $options['social_icons_acc']['fa-linkedin-in-url']; ?>">
            <i class="fa-brands fa-linkedin-in"></i></a>
	<?phpendif; ?>

	<?phpif ( $options['social_icons_acc']['fa-discord-switcher'] ): ?>
        <a href="<?php echo $options['social_icons_acc']['fa-discord-url'] == '' ? 'javascript:void' : $options['social_icons_acc']['fa-discord-url']; ?>">
            <i class="fa-brands fa-discord"></i></a>
	<?phpendif; ?>
</div>
