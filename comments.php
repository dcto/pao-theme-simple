    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="area comments">
    	<h4 id="response" class="comment-title"><?php _e('Comment'); ?></h4>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form">
			<div class="col col1">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('用户：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
                <label for="author" class="required"><?php _e('昵称：'); ?></label>
    			<input type="text" name="author" id="author" class="u-ipt" value="<?php $this->remember('author'); ?>" />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('邮箱：'); ?></label>
    			<input type="email" name="mail" id="mail" class="u-ipt" value="<?php $this->remember('mail'); ?>" />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('网站：'); ?></label>
    			<input type="url" name="url" id="url" class="u-ipt" placeholder="<?php _e('http://pao11.com'); ?>" value="<?php $this->remember('url'); ?>" />
    		</p>
            <?php endif; ?>
			</div>
            <div class="col col2">
            <p>
                <textarea rows="8" name="text" class="textarea"><?php $this->remember('text'); ?></textarea>
            </p>
            </div>            
            <div style="clear:both"></div>
            <div class="col3"><p><button type="submit" class="u-btn u-btn-c4"><?php _e('Submit Comment'); ?></button></p></div>
			
    	</form>
    </div>
    <?php endif; ?>    