<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico"/>
<link rel="apple-touch-icon" href="/touchicon.png"/>
<title><?php $this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
), '', ' - '); ?><?php //$this->options->title(); ?></title>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/reset.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
<?php $this->header(); ?>
</head>
<body>
<header id="header" class="g-hd">
            <div class="site-name fl">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php if ($this->options->logoUrl): ?><img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" /><?php endif; ?><?php $this->options->title() ?> <?php _e('˙.˙') ?></a>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
 
            <div class="site-page fr">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </nav>
            </div>
</header>