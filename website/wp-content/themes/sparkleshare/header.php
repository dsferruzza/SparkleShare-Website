<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <title>SparkleShare - Sharing work made easy <?php wp_title(' &raquo; '); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/default.css" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/favicon.png" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!-- Flattr -->
    <script type="text/javascript">
      /* <![CDATA[ */
      (function() {
          var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
          s.type = 'text/javascript';
          s.async = true;
          s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
          t.parentNode.insertBefore(s, t);
      })();
      /* ]]> */
    </script>

    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script>
      // Consider all the following javascript code as public domain, do whatever you like with it.
      $(document).ready(function() {
        $('.wallet').html("1GNL" + "WUF5" + "Y9GHJ4" + "ymf" + "F3JBJHAX");
        $('.wallet').html($('.wallet').html() + "veq" + "DHTK8" + "h");

        $('.question').click(function () {
          $(this).next(".answer").slideToggle('fast');
          return false;
         }
        );
      
        (function($) {
          var cache = [];
          $.preLoadImages = function() {
            var args_len = arguments.length;
              for (var i = args_len; i--;) {
                var cacheImage = document.createElement('img');
                cacheImage.src = arguments[i];
                cache.push(cacheImage);
              }
          }
        })(jQuery)
        
        if (navigator.userAgent.indexOf('Mac') < 0) {
          jQuery.preLoadImages("slide-1.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-1.png");
          jQuery.preLoadImages("slide-2.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-2.png");
          jQuery.preLoadImages("slide-3.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-3.png");
          jQuery.preLoadImages("slide-4.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-4.png");
        } else {
          jQuery.preLoadImages("slide-1.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-1-mac.png");
          jQuery.preLoadImages("slide-2.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-2-mac.png");
          jQuery.preLoadImages("slide-3.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-3-mac.png");
          jQuery.preLoadImages("slide-4.png", "<?php bloginfo('stylesheet_directory'); ?>/img/slide-4-mac.png");        
        }
      
        var slide = 0;
        var texts = new Array("SparkleShare is a collaboration and sharing tool that is designed to keep things simple and to stay out of your way.", 
                              "Documents are synchronised to all of your peers when changes are made, and you will be notified when someone has made a change.",
                              "You can have as many projects as you'd like, using as much space as you'd like, on as many hosts as you'd like.",
                              "Documents in transit are encrypted end-to-end, and can optionally be stored scrambled on the host as well. So there's no peeking by anyone.");
  
        function updateControls() {
          $(".navigation-back").show();
          $(".navigation-forward").show();
          if (slide == 0) {
            $(".navigation-back").hide();
          } else if (slide == texts.length - 1) {
            $(".navigation-forward").hide();          
          } else {

          }
        }
  
        function updateSlide() {
          if(slide > texts.length)
            slide = texts.length;
            
          if(slide < 0)
            slide = 0;

          $("#text").html(texts[slide]);
          
          if (navigator.userAgent.indexOf('Mac') < 0)
            $("#graphic").html("<img src='<?php bloginfo('stylesheet_directory'); ?>/img/slide-" + (slide + 1) + ".png' />");
          else
            $("#graphic").html("<img src='<?php bloginfo('stylesheet_directory'); ?>/img/slide-" + (slide + 1) + "-mac.png' />");
        }
  
        function slideForward() {
          $('#graphic').css({
            opacity: 0, left: '173px'
          });
  
          $('#text').css({
            opacity: 0, left: '50px'
          });
  
          $('#graphic').animate({
            opacity: 1, left: '123px'
          }, 400, function() {
            // Animation complete.
          });        $('#text').animate({
            opacity: 1, left: '0px'
          }, 400, function() {
            // Animation complete.
          });
        }
  
        function slideBack() {
          $('#graphic').css({
            opacity: 0, left: '63px'
          });
  
          $('#text').css({
            opacity: 0, left: '-30px'
          });
  
          $('#graphic').animate({
            opacity: 1, left: '123px'
          }, 400, function() {
            // Animation complete.
          });        $('#text').animate({
            opacity: 1, left: '0px'
          }, 400, function() {
            // Animation complete.
          });
        }
  
        updateSlide();
        updateControls();
  
        $(".navigation-forward").click(function () {
          slide++;
          updateControls();
          
          $('#graphic').animate({
            opacity: 0.1, left: '63px'
          }, 400, function() {
            // Animation complete.
          });
  
          $('#text').animate({
            opacity: 0, left: '-30px'
          }, 400, function() {
          updateControls();
            updateSlide();
            slideForward ();
          });
        });
  
        $(".navigation-back").click(function () {
          slide--;
          updateControls();
          
          $('#graphic').animate({
            opacity: 0.1, left: '173px'
          }, 400, function() {
            // Animation complete.
          });
  
          $('#text').animate({
            opacity: 0, left: '30px'
          }, 400, function() {
            updateSlide();
            slideBack ();
          });
        });
      });
    </script>
  </head>
  <body>
    <div id="logo">
      <div id="links">
        <?php
          if (is_page('Blog'))
            $is_blog = true;
          if (is_page('Support us'))
            $is_help = true;
        ?>
        <a href="<?php bloginfo('url'); ?>" <?php if (!$is_blog && !$is_help) echo "class=\"page-active\""; ?>>home</a>
        <a href="<?php bloginfo('url'); ?>/blog/"<?php if ($is_blog) echo "class=\"page-active\""; ?>>blog</a>
        <a href="<?php bloginfo('url'); ?>/support-us/"<?php if ($is_help) echo "class=\"page-active\""; ?>>donate</a>
      </div>
    </div>
