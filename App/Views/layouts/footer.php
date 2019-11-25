</footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/jquery-min.js" ></script>
    <!-- popper  -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/popper.min.js"></script>
    <!--  bootstrap -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/bootstrap.min.js" ></script>
    <!-- Modernizr JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/modernizr.js"></script>
    <!-- Appear JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/appear.min.js"></script>
    <!-- Megamenu  -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/mega_menu.min.js"></script>
    <!-- Timeline JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/timeline.js"></script>
    <!-- Wow -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/wow.min.js"></script>
    <!-- scrollme -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/jquery.scrollme.min.js"></script>
    <!-- countdown JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/countdown.js"></script>
    <!-- waypoints JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/waypoints.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/isotope.pkgd.min.js"></script>
    <!-- Progressbar JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/circle-progress.min.js"></script>
    <!-- Canvas JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/canvasjs.min.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="http://<?php echo APP_HOST; ?>/public/revslider/js/extensions/revolution.extension.video.min.js"></script>
    <!-- Retina JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/retina.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="http://<?php echo APP_HOST; ?>/public/js/custom.js"></script>
    <script>
    var tpj=jQuery;

    var revapi3;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_3_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_3_1");
    }else{
    revapi3 = tpj("#rev_slider_3_1").show().revolution({
    sliderType:"standard",
    jsFileLocation:"//localhost/revslider-standalone/revslider-standalone/revslider/public/revslider/assets/js/",
    sliderLayout:"fullwidth",
    dottedOverlay:"none",
    delay:9000,
    navigation: {
    onHoverStop:"off",
    },
    visibilityLevels:[1240,1024,778,480],
    gridwidth:1366,
    gridheight:790,
    lazyType:"none",
    parallax: {
    type:"mouse",
    origo:"enterpoint",
    speed:400,
    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
    type:"mouse",
    disable_onmobile:"on"
    },
    shadow:0,
    spinner:"spinner0",
    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    shuffle:"off",
    autoHeight:"off",
    disableProgressBar:"on",
    hideThumbsOnMobile:"off",
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    debugMode:false,
    fallbacks: {
    simplifyAll:"off",
    nextSlideOnWindowFocus:"off",
    disableFocusListener:false,
    }
    });
    }
    }); /*ready*/
    </script>
  </body>
</html>