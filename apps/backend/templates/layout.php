<!html>
<html>
<head>
    <title>Chemist</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php use_stylesheet('admin.css') ?>
    <?php use_stylesheet('style.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
    <script type="text/javascript">
        hs.graphicsDir = 'images/graphics/';
        hs.outlineType = 'rounded-white';
        hs.wrapperClassName = 'draggable-header';
    </script>
</head>
<body>
    <?php $module = sfContext::getInstance()->getModuleName(); ?>
    <div id="container">
        <div id="header">
            <h1>
                <a title="На главную провизора" class="logo" href="<?php echo url_for('homepage') ?>"></a>
            </h1>
        </div>
        <?php include_partial('global/menu', array()); ?>
        <div id="content">
            <?php echo $sf_content ?>
        </div>

        <div id="footer">
            &copy; 2012 Mosсow
        </div>
    </div>
</body>
</html>