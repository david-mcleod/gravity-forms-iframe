<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo esc_html( $form['title'] ); ?></title>
<style type="text/css">
html, body {
  height: auto !important;
  padding: 0;
  margin: 0;
}
#cookie-law-info-bar {
  display: none !important;
}
ul {
  padding: 0;
}
<?php echo $custom_css; ?>
</style>
<?php wp_head(); ?>
<?php do_action( 'gfiframe_head', $form_id, $form ); ?>
</head>
<body>
<script type="text/javascript" src="<?php echo plugin_dir_url( __DIR__ ); ?>assets/scripts/iframeResizer.contentWindow.min.js"></script>
<?php gravity_form( $form_id, $display_title, $display_description ); ?>
<?php wp_footer(); ?>
</body>
</html>
