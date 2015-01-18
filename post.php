<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<section id="main" class="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
		<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
		<div class="post-meta">
			<i itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name" rel="author"><?php $this->author(); ?></span>@</i><i><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></i>
		</div>		
        <div class="post-content" itemprop="articleBody">
			<?php $this->content('Read More&gt;&gt;'); ?>
        </div>		
    </article>
    <?php $this->need('comments.php'); ?>
    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>    
</section>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>