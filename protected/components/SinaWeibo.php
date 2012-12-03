<?php
/*
*$language = 'zh_cn' or 'zh_tw'
*$width =100% or number
*$height
*$fansRow
*
*
*
*
*/
class SinaWeibo extends PortletBase{

	public $language = 'zh_cn';
	public $width = '100%';
    public $frameborder = 0;
    public $scrolling = 'no';
	public $weibo_width = 0;
	public $height = 550;
	public $fansRow = 1;
	public $ptype = 1;
	public $speed = 300;
	public $skin = 1;
	public $isTitle = 0;
	public $noborder = 1;
	public $isWeibo = 1;
	public $isFans = 0;
	public $uid = 1627421401;
	public $verifier = '05eec98a';

	protected function renderContent(){
        $src = 'http://widget.weibo.com/weiboshow/index.php?language='.$this->language
           .'&width='.$this->weibo_width
           .'&height='.$this->height
           .'&fansRow='.$this->fansRow
           .'&ptype='.$this->ptype
           .'&speed='.$this->speed
           .'&skin='.$this->skin
           .'&isTitle='.$this->isTitle
           .'&noborder='.$this->noborder
           .'&isWeibo='.$this->isWeibo
           .'&isFans='.$this->isFans
           .'&uid='.$this->uid
           .'&verifier='.$this->verifier
           .'&dpc=1';
        echo '<iframe width="'.$this->width.
            '" height="'.$this->height.
            '" class="share_self" frameborder="'.$this->frameborder.
            '" scrolling="'.$this->scrolling.
            '" src="'.$src.'"></iframe>';
	}

}
