<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jason Blog: The study garden for jason</title>
  <?php Yii::app()->clientScript->registerScriptFile($this->getAssetsBase().'/js/jquery-1.8.3.js'); ?>
  <?php Yii::app()->clientScript->registerScriptFile($this->getAssetsBase().'/js/app.js'); ?>
  <?php Yii::app()->clientScript->registerCssFile($this->getAssetsBase().'/css/main.css'); ?>
</head>
<body>
  <div class="header">
    <div class="pos">
      <div class="logo">
        <a href="" title="">jason</a>
      </div>
      <div class="nav">
        <ul>
          <li>
            <a href="<?php echo Yii::app()->homeUrl; ?>">Home</a>
          </li>
          <li>
            <a href="">About</a>
          </li>
          <li>
            <a href="">Contact</a>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
    <?php echo $content; ?>
  <div class="pos">
    <div class="footer rounded">
      <div class="me png" title=""></div>
      <div class="address">
        <ul>
          <?php
            $infos = Yii::app()->params['info'];
            foreach($infos as $info){
              echo '<li>';
              echo $info;
              echo '</li>';
            } 
          ?>
        </ul>
      </div>
      <div class="comment-list">
        <?php
          $comments = Comment::model()->findRecentComments(5);
          echo '<ul>';
          foreach($comments as $comment){
            echo '<li>';
            $url = Yii::app()->createUrl('post/view',array('id'=>$comment->post_id));
            echo '<a href="'.$url.'" target="_blank">'.$comment->content.'</a>';
            echo '</li>';
          }
          echo '</ul>';
        ?>
      </div>
      <i class="clear"></i>
    </div>
  </div>
</body>
</html>
