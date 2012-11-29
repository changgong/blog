<?php
/* @var $this PostController */
/* @var $model Post */
$this->breadcrumbs=array(
	$model->title,
);
$this->pageTitle = $model->title;
?>
<div class="post">
    <?php $this->renderPartial('_view',array(
        'data'=>$model,
    ));
    ?>
</div>
<div id="comments" class="comments">
    <h2 id="comments-title">
        <span>
            <?php echo '"',$model->title,'" have ',$model->commentCount,' comment(s)' ?>
        </span>
    </h2>
    <ol class="commentlist">
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        ));?>  
    </ol>
    <div id="respond">
        <h3 id="reply-title">Leave a Reply</h3>
        <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
            <div class="flash-success">
                <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
            </div>
        <?php else: ?>
            <?php $this->renderPartial('/comment/reply',array(
                'model'=>$comment,
            ));?>
        <?php endif; ?>   
    </div> 
</div>





