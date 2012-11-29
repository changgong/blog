<?php
Yii::import('zii.widgets.CPortlet');
class PortletBase extends CPortlet{

	public $htmlOptions = array('class'=>'widget widget_text');
    public $titleCssClass = 'widget-title';

    public $contentCssClass = 'widget-content';

    protected function renderDecoration(){
		if($this->title !== null){
			echo "<h3 class=\"{$this->titleCssClass}\">{$this->title}</h3>\n";
		}
    }

}
