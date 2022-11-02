<?php /* Smarty version 2.6.32, created on 2022-11-02 15:39:37
         compiled from xswatch4/tpl/cookieConsent.tpl */ ?>
<!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/tools/cookie-consent/docs/installation/ -->
<script type="text/javascript">
    window.cookieconsent_options = {
        message: '<?php echo @THEME_COOKIE_MESSAGE; ?>
',
        dismiss: '<?php echo @THEME_COOKIE_DISMISS; ?>
',
        learnMore: '<?php echo @THEME_COOKIE_LEARNMORE; ?>
',
        link: null, /* Replace null with URL to your policy for learnMore link */
        container: null,
        theme: false,
    };
</script>
<script src="<?php 
echo 'http://localhost/themes/xswatch4/'; ?>js/cookieconsent.min.js"></script>
<!-- End Cookie Consent plugin -->