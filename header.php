<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php $this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href="//cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
<link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--[if lt IE 9]>
<script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php $this->header(); ?>
</head>
<body>

</body>
</html>