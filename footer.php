<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cooked
 */

?>
<nav class="cd-vertical-nav">
	<ul>
	</ul>
</nav> 
<div>
  <div class="container">
    <h2 class=' list-group-item collapse-title list-title'>Последние записи рецептов </h2>
    <hr>
    <?php showNewPost();?>   
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

  </div>
</div>
<div class='fixed-container'>
  <div class='btn-wrap d-flex align-items-center justify-content-between'>
    <span class='btn-hide'><i class="fa fa-angle-down" aria-hidden="true"></i></span ><span class='title-single-post-count'>Выбрано количество записей: <span class="count-post-length">0</span></span>
  </div>
</div>
</div><!-- #content -->

<footer id="colophon" class="site-footer" >
  <div class="container">
    <div class="row ">
      <div class="col-md-6">
        <div class="risks__content">
          <h6>КОПИРОВАНИЕ МАТЕРИАЛОВ</h6>
          <p>Свободное копирование и распространение материалов,рецептов с сайта lifeisfood разрешено только с указанием активной ссылки на lifeisfood как на источник. Указание ссылки также является обязательным при копировании материалов, рецептов  в социальные сети или печатные издания.</p></div>
        </div>
        <div class="col-md-6">
          <div class="risks__content">
            <p>По вопросам размещения рекламы и сотрудничества обращайтесь по адресу <a title="lifeisfood" href="mailto:lifeisfoods@gmail.com">lifeisfoods@gmail.com</a></p>
          </div>

          <div class="col-md-12 text-center">
            Кулинарный сайт, каталог рецептов "lifeisfood" ©  2018
          </div>
        </div>
      </div>
    </footer>
  </div>

  <?php wp_footer(); ?>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
  integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</body>
</html>
