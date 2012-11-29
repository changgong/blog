<?php $this->beginContent('//layouts/post'); ?>
<div class="pos">
  <?php $this->widget('BannerPanel'); ?>
</div>
<div class="pos">
  <div class="contents">
    <div class="content">
      <?php echo $content; ?>
    </div>
    <div class="sidebar">
      <div id="secondary" class="widget-area box rounded">
        <?php $this->widget('UserMenu'); ?>
        <?php $this->widget('RecentComments',array(
            'maxComments'=>Yii::app()->params['recentCommentCount'],
        ));
        ?>
        <?php $this->widget('TagCloud',array(
            'maxTags'=>Yii::app()->params['tagCloudCount'],
          ));
        ?>
      </div>
      <div id="go-top" class="go-top">Top</div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php $this->endContent(); ?>