<!html>
<html>
  <head>
    <title>Chemist</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php use_stylesheet('style.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <?php $module = sfContext::getInstance()->getModuleName(); ?>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('homepage') ?>">Home page
          </a>
        </h1>
      </div>

      <div id="menu">
        <ul>
          <li class="<?php echo ($module == 'products' ? 'active' : '')?>">
            <?php echo link_to('Products', 'products/index') ?>
          </li>
          <li class="<?php echo ($module == 'producer' ? 'active' : '')?>">
            <?php echo link_to('Producer', 'producer/index') ?>
          </li>
          <li class="<?php echo ($module == 'PreparationForm' ? 'active' : '')?>">
            <?php echo link_to('Preparation Form', 'PreparationForm/index') ?>
          </li>
        </ul>
      </div>

      <div id="content">
        <?php echo $sf_content ?>
      </div>

      <div id="footer">
          &copy; 2012 Moskow
      </div>
    </div>
  </body>
</html>
