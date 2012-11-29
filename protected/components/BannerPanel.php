<?php
class BannerPanel extends PortletBase{

	public $htmlOptions = array('class'=>'banner','id'=>'banner');
    public $contentCssClass = 'bannerContent';

	protected function renderContent(){
		$this->render('bannerPanel');
	}

	protected function renderDecoration(){
		echo '<div class="menu"></div>';
	}
}