<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.userway.org" crossorigin>
    <link rel="preconnect" href="https://onlineschedulingv2.threadcommunication.com" crossorigin>
    <link rel="preload" href="<?php echo esc_url(home_url('/static/home.jpg')); ?>" as="image" fetchpriority="high">
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
    window.$buoop = {notify:{e:-6,f:-4,o:-4,s:-2,c:-4},insecure:true,api:5};

    function $buo_f(){
      var e = document.createElement("script");
      e.src = "//browser-update.org/update.min.js";
      e.async = true;
      document.body.appendChild(e);
    };

    function scheduleBrowserUpdate(){
      if (window.requestIdleCallback) {
        window.requestIdleCallback($buo_f, { timeout: 5000 });
      } else {
        setTimeout($buo_f, 5000);
      }
    }

    try {
      if (document.readyState === "complete") {
        scheduleBrowserUpdate();
      } else {
        window.addEventListener("load", scheduleBrowserUpdate, false);
      }
    } catch(e) {
      window.attachEvent("onload", scheduleBrowserUpdate);
    }
  </script>

  <!-- <script id="rhinogram-embed" src="https://app.rhinogram.com/widget/embed.js?id=043a1ea3-aaca-416b-9670-f48459f57b12"></script> -->

<script>

  function applyStyles(element) {
    const styles = {
      bottom: 0,
      right: 0
    };
    Object.assign( element.style, styles )
  }

  (function waitForElement(attempts) {
    if (!attempts) return;
    setTimeout(() => {
      const element = document.querySelector('.rhinogram-widget-container');
      if( element ){
        applyStyles(element);
      }
      else{
        waitForElement(attempts - 1);
      }
    }, 250);
  })(40);

</script>

      <?php
      if(is_page(391)){ ?>
        <script>
           gtag('event', 'conversion', {'send_to': 'AW-619810451/UM0qCMzV89UBEJOdxqcC'});
        </script>
    <?php }?> 
    <script type="text/javascript">

  (function(d, w){
    var s = d.createElement("script");
    s.id = "userway-widget-script";
    s.setAttribute("data-account", "D3656BNpyD");
    s.setAttribute("src", "https://cdn.userway.org/widget.js");
    s.async = true;

    function loadUserWay() {
      if (d.getElementById("userway-widget-script")) return;
      (d.body || d.head).appendChild(s);
    }

    function scheduleUserWay() {
      if (w.requestIdleCallback) {
        w.requestIdleCallback(loadUserWay, { timeout: 3000 });
      } else {
        setTimeout(loadUserWay, 1500);
      }
    }

    if (d.readyState === "complete") {
      scheduleUserWay();
    } else {
      w.addEventListener("load", scheduleUserWay, false);
    }
  })(document, window);

  (function(d){
    var ns = d.createElement("noscript");
    ns.innerHTML = `Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a>`;
    (d.body || d.head).appendChild(ns);})(document);   

</script>

<script type="text/javascript">

  (function(d, w) {
    var openChairConfig = {

token: "eyJhbGciOiJIUzI1NiJ9.eyJvcmlnaW4iOiJsZXZpbmVvcnRob2RvbnRpY3MuY29tIiwicHJhY3RpY2VfaWQiOiIxMDEzIn0.7E01vzWc8G-OHCOggx3T3qUAteJLbKgibjf9en3grNc",

hideTooltipHeader: true,


floatDownLocsWithoutBookings: true,

filterOptions: {

"New Patient Child ": ["1013-635a331a-b415-42e1-9777-889fc4a95abb"],

"New Patient Adult": ["1013-d266a5ed-5dce-4c9d-baf3-d821f0c7bdf9"],

},

specificLocations: ["1013-c0c00395-163c-4669-a1eb-12cbd20ce508"],

};

    var openChairLoading = false;
    var openChairReady = false;
    var pendingOpenChairTarget = null;

    function closestOpenChair(element) {
      while (element && element !== d) {
        if (typeof element.className === "string" && (" " + element.className + " ").indexOf(" openchair-widget ") > -1) {
          return element;
        }

        element = element.parentNode;
      }

      return null;
    }

    function initOpenChair() {
      if (openChairReady || !w.OpenChair || !w.OpenChair.init) return;

      openChairReady = true;
      w.OpenChair.init(openChairConfig);

      if (pendingOpenChairTarget && pendingOpenChairTarget.click) {
        var target = pendingOpenChairTarget;
        pendingOpenChairTarget = null;
        setTimeout(function() {
          target.click();
        }, 50);
      }
    }

    function loadOpenChair() {
      if (openChairLoading) return;

      openChairLoading = true;
      var script = d.createElement("script");
      script.src = "https://onlineschedulingv2.threadcommunication.com";
      script.async = true;
      script.onload = initOpenChair;
      (d.body || d.head).appendChild(script);
    }

    function scheduleOpenChair() {
      if (w.requestIdleCallback) {
        w.requestIdleCallback(loadOpenChair, { timeout: 3000 });
      } else {
        setTimeout(loadOpenChair, 1500);
      }
    }

    d.addEventListener("click", function(event) {
      var target = closestOpenChair(event.target);
      if (!target || openChairReady) return;

      event.preventDefault();
      pendingOpenChairTarget = target;
      loadOpenChair();
    }, true);

    if (d.readyState === "complete") {
      scheduleOpenChair();
    } else {
      w.addEventListener("load", scheduleOpenChair, false);
    }
  })(document, window);

</script>
</body>
</html>
