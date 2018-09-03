<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Title';
?>
<!DOCTYPE html>
<html>
  <head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('description','sample text,sample tex'); ?>
    <?= $this->Html->meta('keywords','word1,word2,word3'); ?>

    <?= $this->Html->meta('viewport','width=device-width, initial-scale=1.0'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="assets/images/common/ogp.png">
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('blog/style') ?>
    <?= $this->Html->css('template') ?>




  </head>
  <body id=js-body>
    <div id="fb-root"></div>

    <noscript class="for-no-js">Javascriptを有効にしてください。</noscript>
    <div class="for-old">お使いのOS・ブラウザでは、本サイトを適切に閲覧できない可能性があります。最新のブラウザをご利用ください。</div>

    <input type="hidden" value="./" id="js-base-url">



    <div class="l-wrap js-wrap">

    <?php if ($this->request->getParam('action') == 'index' || $this->request->getParam('action') == 'single' || $this->request->getParam('action') == 'archive' ){ ?>
      <!-- default index nav -->
      <header class="l-header  js-header">
        <div class="l-header-top u-clear">
            <div class="l-header-logo">
                <div class="logo ">

                    <?php echo $this->Html->image('images/logo.png', ['alt' => 'BLOG', 'width' => '253', 'height' => '28' ]); ?>

                </div>
            </div>
            <div class="l-header-hamburger">
                <a href="#" class="hamburger js-hamburger " >
                    <span class="hamburger-item"></span>
                    <span class="hamburger-item"></span>
                    <span class="hamburger-item"></span>
                </a>
            </div>
        </div>
    </header>

    <!--end header-->
    <nav class="nav js-nav">
        <ul class="nav-list">
            <li class="nav-item">
                <?php echo $this->Html->link('TOP','/',['class'=>'nav-link']) ?>
                <!-- <a href="#" class="nav-link">TOP</a> -->
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Facebook','https://www.facebook.com/facebook/',['class'=>'nav-link']) ?>
                <!-- <a href="#" class="nav-link">Facebook</a> -->
            </li>
            <li class="nav-item">
                <?php echo $this->Html->link('Twitter','https://twitter.com/twitter',['class'=>'nav-link']) ?>
                <!-- <a href="#" class="nav-link">Twitter</a> -->
            </li>
        </ul>
    </nav>
  <?php } else { ?>
    <!-- admin page -->
    <header class="l-header l-header-admin js-header">
      <div class="l-header-top u-clear">
        <div class="l-header-logo">
          <a class="logo " href="./">
            <?php echo $this->Html->image('images/logo-admin.png', ['alt' => 'BLOG', 'width' => '138', 'height' => '28' ]); ?>
          </a>
        </div>
        <div class="l-header-text">
          <p>ADMIN PAGE</p>
        </div>
      </div>
    </header>
  <?php } ?>

    <!--start l-contents-->
    <div class="l-container u-clear">

      <!--start l-main-->
      <main class="l-main js-main">
        <div class="l-main-block"></div>
        <!-- Content goes here -->
        <?= $this->fetch('content') ?>
      </main>
      <!--end l-main-->
    </div>
    <!--end l-contents-->
    <?php if ($this->request->getParam('action') == 'index' || $this->request->getParam('action') == 'single' || $this->request->getParam('action') == 'archive' ){ ?>
    <footer class="l-footer">
      <div class="l-footer-button">
        <a class="page-top js-scroll" href="#js-body">
          <span class="page-top-arrow"></span>
        </a>
        </div>
        <div class="l-footer-copyright">
          <small class="copyright">&copy;copyright</small>
        </div>
    </footer>
    <!--footer ここまで-->
    <?php }else{ ?>
      <!--footer ここから-->
    <footer class="l-footer l-footer-admin">
      <div class="l-footer-copyright">
        <small class="copyright">&copy;copyright</small>
      </div>
    </footer>
    <!--footer ここまで-->
    <?php } ?>

    <?= $this->Html->script('jquery-3.1.1.min') ?>
    <?= $this->Html->script('modernizr') ?>
    <?= $this->Html->script('app') ?>
  </body>
</html>
