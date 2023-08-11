<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <?php wp_head(); ?>
<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-C4GG7BW525"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date()); 
		gtag('config', 'G-C4GG7BW525');
	</script>
</head>
<body <?php echo body_class();  ?>>
  <div id="app"></div>
  <?php wp_footer(); ?>
  <script type="text/javascript">
    WebFontConfig = {
      google: { families: [ 'Open+Sans:400,600' ] }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    var $buoop = {notify:{e:-6,f:-4,o:-4,s:-2,c:-4},insecure:true,api:5};

    function $buo_f(){
      var e = document.createElement("script");
      e.src = "//browser-update.org/update.min.js";
      document.body.appendChild(e);
    };

    try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
    catch(e){window.attachEvent("onload", $buo_f)}
  </script>

  <script id="rhinogram-embed" src="https://app.rhinogram.com/widget/embed.js?id=043a1ea3-aaca-416b-9670-f48459f57b12"></script>

<script>

  function applyStyles(element) {
    const styles = {
      bottom: 0,
      right: 0
    };
    Object.assign( element.style, styles )
  }

  (function waitForElement(interval = 1) {
    setTimeout(() => {
      const element = document.querySelector('.rhinogram-widget-container');
      if( element ){
        applyStyles(element);
      }
      else{
        waitForElement(1);
      }
    }, interval);
  })();

</script>

      <?php
      if(is_page(391)){ ?>
        <script>
           gtag('event', 'conversion', {'send_to': 'AW-619810451/UM0qCMzV89UBEJOdxqcC'});
        </script>
    <?php }?> 
    <script type="text/javascript">

  (function(d){
    var s = d.createElement("script");
    s.setAttribute("data-account", "D3656BNpyD");
    s.setAttribute("src", "https://cdn.userway.org/widget.js");
    (d.body || d.head).appendChild(s);})(document);

  (function(d){
    var ns = d.createElement("noscript");
    ns.innerHTML = `Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a>`;
    (d.body || d.head).appendChild(ns);})(document);   

</script>
</body>
</html>
