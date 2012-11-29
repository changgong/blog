<?php $this->widget('zii.widgets.CListView',array(
    'dataProvider'=>$dataProvider,
    'cssFile'=>false,
    'itemView'=>'_post',
    'template'=>"{items}\n{pager}",
    'pager'=>array(
        'cssFile'=>false,
      ),
));?>

