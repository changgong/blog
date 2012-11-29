<?php
class RecentComments extends PortletBase{
    public $title = 'Recent Comments';

    public $maxComments = 10;

    public function getRecentComments(){
        return Comment::model()->findRecentComments($this->maxComments);
    }

    protected function renderContent(){
        $this->render('recentComments');
    }
}
