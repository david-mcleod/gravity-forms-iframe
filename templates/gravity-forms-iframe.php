<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo esc_html( $form['title'] ); ?></title>
<?php wp_head(); ?>
<style type="text/css">
html, body {
  height: auto !important;
  padding: 0;
  margin: 0;
  margin-top: 0 !important;
}
body {
  padding-bottom: 32px;
}
#cookie-law-info-bar {
  position: relative !important;
  padding: 0 !important;
  box-shadow: 0 0 0 rgba(255,255,255,0) !important;
}
ul {
  padding: 0;
}
<?php echo $custom_css; ?>
</style>
<?php do_action( 'gfiframe_head', $form_id, $form ); ?>
</head>
<body>
<script type="text/javascript" src="<?php echo plugin_dir_url( __DIR__ ); ?>assets/scripts/iframeResizer.contentWindow.min.js"></script>
<?php gravity_form( $form_id, $display_title, $display_description ); ?>
<?php wp_footer(); ?>
</body>
</html>
