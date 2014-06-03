<?php
class IndexAction extends Action {
    public function index(){
        $this->assign('title','ThinkPHP示例：模板继承22222');
        $this->assign('var','这里是子模板定义内容!');
		 $this->assign('var2','这里是子模板2定义内容!');
        $this->display();
    }

}