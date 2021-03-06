<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cooked
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <meta property="og:image" content="https://lifeisfood.online/wp-content/themes/cooked/assets/img/LifeIsFood1.png">
  <meta property="og:image" content="https://lifeisfood.online/wp-content/themes/cooked/assets/img/LifeIsFood1.png">
  <meta name="twitter:image" content="https://lifeisfood.online/wp-content/themes/cooked/assets/img/LifeIsFood1.png">
  <meta name="twitter:site" content="https://lifeisfood.online/">
  <meta name="yandex-verification" content="3a9234b9afe4e96c" />
  <link rel='stylesheet' id='compiled.css-css'  href='https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.5.min.css?ver=4.7.5' type='text/css' media='all' />
  <meta name="flattr:id" content="yvzv09">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126640941-1"></script>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-126640941-1');
  </script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-1422844265004757",
      enable_page_level_ads: true
    });
  </script>
  
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '179952906260891');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
     src="https://www.facebook.com/tr?id=179952906260891&ev=PageView&noscript=1"
     /></noscript>
     <!-- End Facebook Pixel Code -->

   </head>
   <body <?php body_class(); ?>>

    <!-- Modal -->
    <!-- <div id="p_prldr"><div class="contpre"><span class="svg_anm"><img src="/wp-content/themes/cooked/assets/img/untitled-5.gif" alt=""></span></div></div> -->
    <div class="modal fade" id="historyModal" tabindex="-1" role="dialog" aria-labelledby="historyModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
         <div class="d-flex align-items-end justify-content-between">
           <div class="history-header">
             <h4 >Здравствуйте !</h4>
             <p class="m-0">Мы рады вашему возвращению на наш сайт рецептов.</p>
             <p class="mb-1">Мы сохранили для вас каталог истроии рецептов которые вы просматривали</p>
             <ul class="history-list-wrap p-0 m-0 ">
             </ul>
           </div>
           <div class="cook-man">
             <svg width="70" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.11 214.7"><defs><style>
             </style></defs><g class="cls-1"><g id="Слой_2" data-name="Слой
               2"><g id="Objects"><path class="cls-3" d="M45.09,201.48a31.45,31.45,0,0,0,4.64.33v8.45l-2.16.83-1-1.49s-5.13,4-9.11,3.81-2.66-1.83,1.32-4S45.42,206,45.09,201.48Z"/><path class="cls-4" d="M45.08,202.62h0s3-.68,3,2,1.61,4.72.67,4.45-2-.54-2-.94S40,215.29,35.09,212.6c.11.45.84.75,2.38.81,4,.16,9.11-3.81,9.11-3.81l1,1.49,2.16-.83v-8.45a31.45,31.45,0,0,1-4.64-.33A8.59,8.59,0,0,1,45.08,202.62Z"/><path class="cls-3" d="M58.48,201.48a31.45,31.45,0,0,1-4.64.33v8.45l2.16.83,1-1.49s5.13,4,9.11,3.81,2.66-1.83-1.32-4S58.15,206,58.48,201.48Z"/><path class="cls-4" d="M58.49,202.62h0s-3-.68-3,2-1.61,4.72-.67,4.45,2-.54,2-.94,6.73,7.14,11.64,4.45c-.1.45-.83.75-2.37.81-4,.16-9.11-3.81-9.11-3.81l-1,1.49-2.16-.83v-8.45a31.45,31.45,0,0,0,4.64-.33A8.59,8.59,0,0,0,58.49,202.62Z"/><path class="cls-5" d="M51.79,162.24l-24.32-.15c2.54,20.77,17.13,40.22,18,40.81s4.65.88,4.44-1.47-3-16.06-3-20.92,4.87-4.57,4.87-4.57,4.86-.3,4.86,4.57-2.75,18.56-3,20.92,3.59,2.06,4.44,1.47,15.44-20,18-40.81Z"/><path class="cls-6" d="M51.79,175.94s4.86-.3,4.86,4.57-2.75,18.56-3,20.92,3.59,2.06,4.44,1.47,15.44-20,18-40.81l-24.31.15-24.32-.15S32.83,171.81,55,171c12.5-.46,16.84-5.74,14.73.75s-9.47,25.43-11.59,28.49-2.67,1.64-2.54-.74c1-18.56,7.4-25.32,2.47-25.26-6.91.1-13.52-.21-13.25,4.34.57,9.85,4.85,20.91,5.07,22.84-.21-2.36-3-16.06-3-20.92S51.79,175.94,51.79,175.94Z"/><path class="cls-7" d="M33.65,168.53a42.94,42.94,0,0,0,3,15.32A123.39,123.39,0,0,0,44,199.17S24,168.67,33.65,168.53Z"/><path class="cls-8" d="M19.23,152.05s-3,7.18,2.55,7c1.4,0,.64,3.39-3.57,1.84,0,0,.93,2.54,1.55,3.82s-.53,2.34-1.52,1.47-2-3.8-2-3.8a16,16,0,0,0-.52,3.59c.2.58-.56,1.8-1.54.83s-.46-4.26-.46-4.26a28.86,28.86,0,0,0-1.92,3.9c-.18.85-2.05.31-1.52-1.21s1.2-3.29,1.2-3.29-2.1,1.61-2.72,2.25-2.28-.33-.21-2,3.95-4.66,4.07-10.69A7.6,7.6,0,0,1,19.23,152.05Z"/><g class="cls-9"><path class="cls-8" d="M12.11,158.16a14.26,14.26,0,0,1-2.77,3.33h0c1.75-1.78,3.22-4.72,3.33-10a7.6,7.6,0,0,1,6.57.56,10.27,10.27,0,0,0-.77,4.58h0s-1.43-4.48-3.52-2.56S13,156.62,12.11,158.16Z"/><path class="cls-8" d="M8.3,164.38c-.66,0-1.33-.88.29-2.2l.24-.21C8.05,162.73,7.17,163.82,8.3,164.38Z"/></g><path class="cls-10" d="M34,126.73s-10.14,12.7-11.16,21.49S22,156,19.7,156.28s-10.74.37-9.64-6S17.14,126.54,27,120.51,36.92,123.8,34,126.73Z"/><path class="cls-11" d="M21.63,155.67c-3.05.24-5.55-.36-8.06-3.73s2.71-15.55,9.77-25.35,12.29-3.73,12.3-3.72c.31-3.34-1.83-6.55-8.66-2.36-9.84,6-15.81,23.43-16.92,29.78s7.35,6.28,9.64,6C20.73,156.15,21.26,156.28,21.63,155.67Z"/><path class="cls-12" d="M21,154.09s-2.05-2.08-1.64-4.42,2-12.57,10.29-20.43c0,0,1.16.2-1.06,3.09S20.81,147,21,154.09Z"/><path class="cls-8" d="M90.56,144.33s4.74,6.19,7.34,1.25c.66-1.24,3.27,1.11-.17,4,0,0,2.68.45,4.1.54s1.77,1.62.52,2.05-4.27-.18-4.27-.18a15.41,15.41,0,0,0,2.86,2.22.9.9,0,0,1,0,1.76c-1.32.37-3.94-1.71-3.94-1.71a29.06,29.06,0,0,0,2.44,3.6c.65.57-.73,1.93-1.8.72s-2.27-2.67-2.27-2.67.36,2.62.61,3.48-1.41,1.82-1.85-.81-2.1-5.74-7.27-8.82C86.83,149.77,87,146.66,90.56,144.33Z"/><g class="cls-9"><path class="cls-8" d="M92.35,153.54a14.44,14.44,0,0,1,1.53,4.06h0c-.68-2.4-2.51-5.13-7-7.84,0,0,.16-3.11,3.73-5.44a10.16,10.16,0,0,0,3.6,2.93h0s-4.6-1-4,1.8S91.46,152,92.35,153.54Z"/><path class="cls-8" d="M95.87,159.93c-.33.57-1.42.72-1.77-1.34l-.06-.31C94.31,159.33,94.83,160.63,95.87,159.93Z"/></g><path class="cls-10" d="M75.62,119s6,15.1,13.16,20.32,6.35,4.58,5.47,6.71-5,9.53-10,5.42S67.13,133.54,66.75,122,74.52,115,75.62,119Z"/><path class="cls-11" d="M94.66,144c-1.3,2.76-3,4.64-7.22,5.16s-12.18-10-17.21-21,2.84-12.54,2.84-12.54c-2.74-1.91-6.59-1.65-6.32,6.36.38,11.54,12.55,25.33,17.53,29.43s9.09-3.28,10-5.42C94.64,145.06,95,144.66,94.66,144Z"/><path class="cls-12" d="M93,143.85s-2.82.75-4.65-.76-9.93-8-12.68-19c0,0,.76-.91,2.17,2.45S86.72,140.47,93,143.85Z"/><path class="cls-10" d="M71.11,119.5s-15-.1-20.64-.1-20.65.1-20.65.1-7.46,38.85-5.25,44.32c4.25,10.48,25.9,8.91,25.9,8.91s21.65,1.57,25.89-8.91C78.57,158.35,71.11,119.5,71.11,119.5Z"/><path class="cls-11" d="M50.47,172.73s21.65,1.57,25.89-8.91c2.21-5.47-5.25-44.32-5.25-44.32s-15-.1-20.64-.1-20.65.1-20.65.1a58.46,58.46,0,0,0,35.24,4.17s8.89,22.07.35,36.3-28.79,12.76-39.3,6.38h0C32.52,174,50.47,172.73,50.47,172.73Z"/><path class="cls-12" d="M30.46,129.19s-5.34,31.72.26,37.1c0,0-5.6-1.87-4.8-10.94S30.46,129.19,30.46,129.19Z"/><path class="cls-13" d="M30.09,117l40.79-.23.62,4.8a85.46,85.46,0,0,1-42.07,0Z"/><path class="cls-14" d="M53.47,138.49a3,3,0,1,1-3-3A3,3,0,0,1,53.47,138.49Z"/><path class="cls-15" d="M51.76,135.78a3,3,0,0,1-2.18,5.08,3,3,0,0,1-1.29-.3,3,3,0,0,0,5.18-2.07A3,3,0,0,0,51.76,135.78Z"/><path class="cls-14" d="M53.47,147.94a3,3,0,1,1-3-3A3,3,0,0,1,53.47,147.94Z"/><path class="cls-15" d="M51.76,145.23a3,3,0,0,1-2.18,5.07,3.09,3.09,0,0,1-1.29-.29,3,3,0,1,0,3.47-4.78Z"/><path class="cls-14" d="M53.47,157.38a3,3,0,1,1-3-3A3,3,0,0,1,53.47,157.38Z"/><path class="cls-15" d="M51.76,154.67a3,3,0,0,1-2.18,5.08,3,3,0,0,1-1.29-.3,3,3,0,0,0,2.18.94,3,3,0,0,0,1.29-5.72Z"/><path class="cls-16" d="M47.82,124.41S45.94,119.83,40,121c-4.57.89-7.25,3.65-11.37,1.82a13.28,13.28,0,0,0,12,8.22C47.87,131.27,49,126.85,47.82,124.41Z"/><path class="cls-13" d="M47.92,125.21s-1-2.08-4.44-1.74S37.74,124.82,39,125s3.4.36,3.64.37-2.43,1.78-6.87,1.47C35.8,126.83,48.25,130.71,47.92,125.21Z"/><path class="cls-17" d="M40,121c-3.49.68-5.89,2.45-8.67,2.42h0a15.72,15.72,0,0,0,8.17-1.2c4-1.76,7.1,1.42,5.28,4-2,2.75-9.1,3.76-13.59.61A13.15,13.15,0,0,0,40.68,131c7.19.24,8.29-4.18,7.14-6.62C47.82,124.41,45.94,119.83,40,121Z"/><path class="cls-16" d="M53.11,124.41S55,119.83,60.92,121c4.57.89,7.25,3.65,11.38,1.82a13.3,13.3,0,0,1-12,8.22C53.06,131.27,52,126.85,53.11,124.41Z"/><path class="cls-13" d="M53,125.21s1-2.08,4.44-1.74,5.75,1.35,4.45,1.52-3.39.36-3.64.37,2.43,1.78,6.88,1.47C65.14,126.83,52.69,130.71,53,125.21Z"/><path class="cls-17" d="M60.92,121c3.5.68,5.89,2.45,8.67,2.42h0a15.72,15.72,0,0,1-8.17-1.2c-4-1.76-7.1,1.42-5.27,4,2,2.75,9.1,3.76,13.58.61A13.15,13.15,0,0,1,60.25,131c-7.19.24-8.28-4.18-7.14-6.62C53.11,124.41,55,119.83,60.92,121Z"/><path class="cls-16" d="M55.12,125.12c0,2-2.1,3.65-4.68,3.65s-4.69-1.64-4.69-3.65,2.1-3.66,4.69-3.66S55.12,123.1,55.12,125.12Z"/><path class="cls-18" d="M52.79,122a2.63,2.63,0,0,1,.63,1.68c0,1.73-1.79,3.13-4,3.13a4.17,4.17,0,0,1-3.64-1.83,1.1,1.1,0,0,0,0,.18c0,2,2.1,3.65,4.69,3.65s4.68-1.64,4.68-3.65A3.62,3.62,0,0,0,52.79,122Z"/><path class="cls-19" d="M88.15,97.55c-2.15,3.34-6,4.7-8.55,3s-2.21-7.61-.06-11,5.26-2.79,7.84-1.13S90.3,94.21,88.15,97.55Z"/><path class="cls-20" d="M87.79,90.78a2,2,0,0,0-2.3.83c-.78,1.35-2.24,6.28-1.43,6.54a2.07,2.07,0,0,0,2.54-1.59c.37-1.45.06-2.67-.61-2.44S86.13,90.82,87.79,90.78Z"/><path class="cls-19" d="M13.15,97.55c2.14,3.34,6,4.7,8.54,3s2.22-7.61.07-11-5.27-2.79-7.84-1.13S11,94.21,13.15,97.55Z"/><path class="cls-20" d="M13.51,90.78a2,2,0,0,1,2.3.83c.77,1.35,2.24,6.28,1.42,6.54a2.06,2.06,0,0,1-2.53-1.59c-.37-1.45-.07-2.67.61-2.44S15.17,90.82,13.51,90.78Z"/><path class="cls-21" d="M83.79,88.93c0,18.44-6.92,33.39-33.14,33.39-24.24,0-33.15-14.95-33.15-33.39a33.15,33.15,0,1,1,66.29,0Z"/><path class="cls-22" d="M33.36,118.86c4.59,2.21,10.3,3.46,17.29,3.46,26.22,0,33.14-14.95,33.14-33.39a33.4,33.4,0,0,0-16.9-29.11C64.61,61.47,64.06,66,73.34,78c0,0,13.44,8.29,1.56,28.68S43.09,121.81,33.36,118.86Z"/><path class="cls-5" d="M17.45,88.3S20.32,77,38,77c0,0-2.81,4.73-5.09,6.25,0,0,21.82.5,30.77-5.25A7.15,7.15,0,0,1,60,83.06s5.51.81,11.72-5.4c0,0,10.73,1.68,12.17,10.48,0,0-1.29-21.93-17.1-30S30.22,57.59,24.5,65C18.2,73.14,17.45,88.3,17.45,88.3Z"/><path class="cls-23" d="M60,83.06s5.51.81,11.72-5.4c0,0,10.73,1.68,12.17,10.48a49,49,0,0,0-2.71-12.22c.77,6.61-10.76-6.84-10.76-6.84,2.19,6.21-5.77,11.17-5.77,11.17,1.61-1.73,1.47-5.34,1.47-5.34-4.67,4.94-27.36,5.74-27.36,5.74,6.35-9.28,23.37-9.78,23.37-9.78-23.75-9.41-36.57,6.67-35.85.45s4.05-11.09,5.09-11.69A22,22,0,0,0,24.5,65c-6.3,8.15-7,23.31-7,23.31S20.32,77,38,77c0,0-2.81,4.73-5.09,6.25,0,0,21.82.5,30.77-5.25A7.15,7.15,0,0,1,60,83.06Z"/><path class="cls-24" d="M41.17,96.24a3.85,3.85,0,0,1-3.58,4.08,4.11,4.11,0,0,1,0-8.16A3.85,3.85,0,0,1,41.17,96.24Z"/><path class="cls-25" d="M38.91,94.37a.89.89,0,1,1-.89-.88A.88.88,0,0,1,38.91,94.37Z"/><path class="cls-25" d="M40.46,96a.54.54,0,1,1-.54-.53A.54.54,0,0,1,40.46,96Z"/><path class="cls-24" d="M67.3,96.24a3.61,3.61,0,1,1-3.58-4.08A3.85,3.85,0,0,1,67.3,96.24Z"/><path class="cls-25" d="M65,94.37a.89.89,0,1,1-.89-.88A.88.88,0,0,1,65,94.37Z"/><path class="cls-25" d="M66.59,96a.54.54,0,1,1-.54-.53A.54.54,0,0,1,66.59,96Z"/><path class="cls-5" d="M58.27,89.75s4.41-5.07,10.8-.49C69.07,89.26,64,81.73,58.27,89.75Z"/><path class="cls-5" d="M32.23,89.75s4.42-5.07,10.8-.49C43,89.26,38,81.73,32.23,89.75Z"/><path class="cls-5" d="M50.6,106.14a4.13,4.13,0,0,0-4.29-3.53,12.74,12.74,0,0,0-7.75,3c-1.73,1.67-5.4,2.91-5.4,1A2.1,2.1,0,0,1,35,104.41s-3,0-3,2.63,6.71,4.71,12.32,3.46S50.81,108.08,50.6,106.14Z"/><g class="cls-9"><path class="cls-5" d="M40,104.86l-.16-.25-.12.08A.88.88,0,0,0,40,104.86Z"/><path class="cls-5" d="M44.37,110.5c5.61-1.25,6.44-2.42,6.23-4.36a4.13,4.13,0,0,0-4.29-3.53,13.42,13.42,0,0,0-6.49,2s6.87-2.26,8.29-.49-1.09,5.38-4.92,5.55-10.54.4-11.14-2.63C32.05,109.67,38.76,111.75,44.37,110.5Z"/></g><path class="cls-5" d="M50.69,106.14a4.14,4.14,0,0,1,4.3-3.53,12.74,12.74,0,0,1,7.75,3c1.73,1.67,5.4,2.91,5.4,1a2.11,2.11,0,0,0-1.87-2.14s3,0,3,2.63-6.72,4.71-12.33,3.46S50.48,108.08,50.69,106.14Z"/><g class="cls-9"><path class="cls-5" d="M61.32,104.86l.16-.25.12.08A1,1,0,0,1,61.32,104.86Z"/><path class="cls-5" d="M56.92,110.5c-5.61-1.25-6.44-2.42-6.23-4.36a4.14,4.14,0,0,1,4.3-3.53,13.42,13.42,0,0,1,6.49,2s-6.87-2.26-8.3-.49,1.09,5.38,4.93,5.55,10.54.4,11.14-2.63C69.25,109.67,62.53,111.75,56.92,110.5Z"/></g><path class="cls-26" d="M52.78,112.77c0,.49-1,.89-2.13.89s-2.13-.4-2.13-.89.95-.9,2.13-.9S52.78,112.27,52.78,112.77Z"/><path class="cls-27" d="M91.73,30A16.46,16.46,0,0,0,66.14,10.88a16.47,16.47,0,0,0-31,0A16.46,16.46,0,0,0,9.57,30,16.46,16.46,0,1,0,30.08,54.2a24.48,24.48,0,0,0,41.06-.11A16.46,16.46,0,1,0,91.73,30Z"/><path class="cls-28" d="M51,53.08c-7.26,0-19.75-6-19.75-6S6.68,54.41,5.62,45.6c-1.72-14.15,12-10.94,12-10.94s-13.84-19,7.1-24.48c6.49-1.7,11.83,5.76,11.83,5.76S36.84,3.27,50.65,3C63,2.81,63.8,21.58,63.8,21.58s4.47-10.2,12.77-10.88C84,10.09,90,16.2,90,23.61a13.36,13.36,0,0,1-1.06,5.23l-1.14,2.7s8.61.59,4.83,8.82c-6,13-21.6,7.54-21.6,7.54S58.3,53.08,51,53.08Z"/><g class="cls-29"><path class="cls-30" d="M79.08,51.55s6.34,4.19,16.49-1.68c0,0-3.13,7.1-10.62,8.45C85,58.32,77.28,55.37,79.08,51.55Z"/><path class="cls-30" d="M22.26,51.55s-6.34,4.19-16.48-1.68c0,0,3.12,7.1,10.61,8.45C16.39,58.32,24.07,55.37,22.26,51.55Z"/></g><path class="cls-10" d="M85.3,48.88l-3,31c-11.73-6.59-22-8.79-32.17-8.71-9.9.08-19.64,2.28-31.09,8.71L16,50.77S34.78,51.83,40.22,38c0,0,12.53,7.39,20.86,0C61.08,38,67.54,51.19,85.3,48.88Z"/><path class="cls-25" d="M21.9,13.31s-4,14.43,4.27,21.62c0,0-8,1.06-10.14-6.68C13.67,19.7,17.77,14.76,21.9,13.31Z"/><path class="cls-12" d="M42.93,33.1S57.69,30.56,60.66,20c0,0,4.38,6.79-1.71,12C52.22,37.82,46,36.21,42.93,33.1Z"/><path class="cls-25" d="M72.41,41.23s13,1.93,18.29-6c0,0,1.79,6.83-4.7,9.52C78.84,47.69,74.11,44.66,72.41,41.23Z"/><path class="cls-31" d="M19,79.85c11.45-6.43,21.19-8.63,31.09-8.71,10.14-.08,20.44,2.12,32.17,8.71l3-31C67.54,51.19,61.08,38,61.08,38c-8.33,7.39-20.86,0-20.86,0-3.35,8.49-11.75,11.35-17.71,12.29,0,0,12.81,2.3,20.47-4.46,0,0,11.7,1.83,17.09-1.6,0,0,7.74,9.34,17.88,9.87L76.08,67.76S43.63,57.25,19,79.85Z"/><path class="cls-30" d="M62.79,36.42a16.41,16.41,0,0,0,4.32-11.11c0-.45,0-.89-.06-1.33a16.38,16.38,0,0,1-5,10.55h0c-.23.22-.46.44-.71.64s-.55.42-.86.63a.11.11,0,0,0,0,0,16.43,16.43,0,0,1-19.62,0v0c-.31-.21-.6-.41-.86-.62A16.44,16.44,0,0,1,34.25,24c0,.44-.06.88-.06,1.33a16.41,16.41,0,0,0,4.32,11.11c-1.77,3.85-6.95,12.19-18.42,11.83A16.46,16.46,0,0,0,40.22,38a16.45,16.45,0,0,0,20.86,0A16.46,16.46,0,0,0,81.21,48.25C69.73,48.61,64.56,40.27,62.79,36.42Z"/></g></g></g></svg>
             </div>
           </div>
         </div>
         <div class="modal-footer mt-3">
          <button type="button" class="btn modal-hist-btn btn-hide-hist" >Скрыть каталог </button>
          <button type="button" class="btn modal-hist-btn btn-reset" >Очистить каталог </button>
        </div>

      </div>
    </div>
  </div>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content" title="<?php esc_html_e('Skip to content', 'cooked'); ?>"><?php esc_html_e('Skip to content', 'cooked'); ?></a>
    <header class="header-area">
      <div class="container">
        <div class="btn-nav-collapse button--moema btn " type="button" data-toggle="collapse"
        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <div class="hamburger hamburger--elastic">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
      </div>
      <a class="btn-history category-img btn-outline-primary-dev" title="История" href="#" data-toggle="modal"
      data-target="#historyModal"
      style="display: none;"
      >История</a>
      <div class="row">
        <div class="col-12">
          <div class="menu-area d-flex justify-content-between flex-column align-items-center ">
            <div class="logo-area">
              <a title="lifeisfood" href="<?php echo esc_url(home_url('/')); ?>">
                <img class="effect-shine" alt="life is food" src="/wp-content/themes/cooked/assets/img/LifeIsFood1.png" >
              </a>
            </div>
            <div class="collapse" id="collapseExample">
              <div class="card-body-nav ">
                <div class="container p-0">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="wrap-nav-sub wrap-nav-sub-type d-flex flex-wrap">
                        <?php the_services_navigations(14, true); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="d-flex justify-content-center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
    style="display:inline-block;width:970px;height:90px"
    data-ad-client="ca-pub-1422844265004757"
    data-ad-slot="4588058064"></ins>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>
  <div id="content" class="site-content">
    <div class="grids d-flex justify-content-between">
      <div class="grid1"></div>
      <div class="grid2"></div>
      <div class="grid3"></div>
      <div class="grid4"></div>
      <div class="grid5"></div>
      <div class="grid6"></div>
      <div class="grid7"></div>
      <div class="grid8"></div>
      <div class="grid9"></div>
    </div>
