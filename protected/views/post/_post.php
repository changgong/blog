<div class="post">
  <h1 class="title entry-title">
    <a href="<?php echo Yii::app()->
      createUrl('post/view',array('id'=>$data->id)); ?>" title="链向
      <?php echo $data->
      title; ?> 的固定链接" rel="bookmark" target="_blank">
      <?php echo $data->title; ?></a>
  </h1>
  <h3 class="date">
    <span class="day"><?php echo date('j',$data->create_time); ?></span>
    <span class="month">
      <?php echo date('n',$data->create_time); ?><i>月</i>
    </span>
    <span class="year"><?php echo date('Y',$data->create_time); ?></span>
  </h3>
  <div class="show">
    <?php echo $data->
    content; ?>
    <p>
      <a href="<?php echo Yii::app()->
        createUrl('post/view',array('id'=>$data->id)); ?>" class="more-link" target="_blank">
      继续阅读
        <span class="meta-nav">→</span>
      </a>
    </p>
  </div>
  <div class="entry-meta"></div>
  <div class="says">
    <a href="<?php echo Yii::app()->
      createUrl('post/index',array('id'=>$data->id)); ?>/#comments" title="
      <?php echo $data->
      title; ?>"> <b><?php echo $data->commentCount; ?></b>
      条回复
    </a>
  </div>
</div>