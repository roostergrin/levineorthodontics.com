<?php
// Hero image for this route (from the cached initial-state payload). Used for
// the preload hint and the pre-Vue placeholder so the LCP image paints before
// the app boots.
$rg_hero_image = function_exists('rg_get_route_hero_image') ? rg_get_route_hero_image() : '';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://cdn.userway.org" crossorigin>
    <link rel="preconnect" href="https://onlineschedulingv2.threadcommunication.com" crossorigin>
    <?php if ($rg_hero_image): ?>
    <link rel="preload" href="<?php echo esc_url($rg_hero_image); ?>" as="image" fetchpriority="high">
    <style id="rg-prepaint-css">
      #app .rg-prepaint{height:100vh;background:url('<?php echo esc_url($rg_hero_image); ?>') center center/cover no-repeat}
      @media screen and (max-width: 1024px){#app .rg-prepaint{height:60vh}}
    </style>
    <?php endif; ?>
    <?php wp_head(); ?>
    <script>
      (function(w, d) {
        w.dataLayer = w.dataLayer || [];
        w.gtag = w.gtag || function(){ w.dataLayer.push(arguments); };
        w.gtag('js', new Date());
        w.gtag('config', 'G-C4GG7BW525');

        function hasGtagScript() {
          return d.querySelector('script[src*="googletagmanager.com/gtag/js?id=G-C4GG7BW525"]');
        }

        function loadGtag() {
          if (hasGtagScript()) return;

          var script = d.createElement('script');
          script.id = 'rg-gtag-c4';
          script.async = true;
          script.src = 'https://www.googletagmanager.com/gtag/js?id=G-C4GG7BW525';
          (d.head || d.body).appendChild(script);
        }

        function scheduleGtag() {
          setTimeout(function() {
            if (w.requestIdleCallback) {
              w.requestIdleCallback(loadGtag, { timeout: 4000 });
            } else {
              loadGtag();
            }
          }, 6000);
        }

        if (d.readyState === 'complete') {
          scheduleGtag();
        } else {
          w.addEventListener('load', scheduleGtag, false);
        }
      })(window, document);
    </script>
</head>
<body <?php echo body_class();  ?>>
  <div id="app"><?php if ($rg_hero_image): ?><div class="rg-prepaint"></div><?php endif; ?></div>
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
      setTimeout(function() {
        if (window.requestIdleCallback) {
          window.requestIdleCallback($buo_f, { timeout: 8000 });
        } else {
          $buo_f();
        }
      }, 10000);
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
           window.gtag && window.gtag('event', 'conversion', {'send_to': 'AW-619810451/UM0qCMzV89UBEJOdxqcC'});
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
      setTimeout(function() {
        if (w.requestIdleCallback) {
          w.requestIdleCallback(loadUserWay, { timeout: 8000 });
        } else {
          loadUserWay();
        }
      }, 8000);
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
      setTimeout(function() {
        if (w.requestIdleCallback) {
          w.requestIdleCallback(loadOpenChair, { timeout: 8000 });
        } else {
          loadOpenChair();
        }
      }, 9000);
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
