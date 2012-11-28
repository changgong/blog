<ul>
<li><?php echo CHtml::link('Create New Post',array('post/new')); ?></li>
<li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
<li><?php echo CHtml::link('Approve Comments',array('comment/index'))
    .'('.Comment::model()->getPendingCommentCount().')'; ?></li>
<li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>
