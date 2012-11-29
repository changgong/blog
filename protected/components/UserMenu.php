<?php
class UserMenu extends PortletBase{

    public function init(){
        $this->title = CHtml::encode(Yii::app()->user->name);
        parent::init();
    }

    protected function renderContent(){
        $this->render('userMenu');
    }
}

