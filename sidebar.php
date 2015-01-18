<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside id="aside">
	<div id="search" class="widget">
		<form action="#" method="GET" action="./" role="search">
			<fieldset class="clearfix">
				<input type="search" name="search" value="<?php _e('What are you looking for?'); ?>" onBlur="if(this.value=='')this.value='<?php _e('What are you looking for?'); ?>'" onFocus="if(this.value=='<?php _e('What are you looking for?'); ?>')this.value='' ">
				<input type="submit" value="Search" class="button">
			</fieldset>
		</form>
	</div>
    <div class="widget">
		<h3 class="widget-title"><?php _e('Category'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </div>

    <div class="widget">
		<h3 class="widget-title"><?php _e('Article'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    </div>

    <div class="widget">
		<h3 class="widget-title"><?php _e('Archives'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>    
</aside>