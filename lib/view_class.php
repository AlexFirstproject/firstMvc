<?php

class View
{
    protected $data;
    protected $controller_dir = null;
    protected $template_name;

    public function __construct($data = array(), $path = null)
    {
        $router = App::getRouter();
        if (!$router){
            return false;
        }

        if (!$path){
            $this->controller_dir = $router->getController();
            $template_name = $router->getMethodPrefix().$router->getAction().'.tpl';
        }else{
            $template_name = $path;
        }

        $this->data = $data;
        $this->template_name = $template_name;

        $path = VIEWS_PATH.DS.'templates'.DS;
        if (!file_exists($path.$this->template_name) and !file_exists($path.$this->controller_dir.DS.$this->template_name) ){
            throw new Exception('Template file is not found in path: '.$this->template_name);
        }
    }

    public function render()
    {
        require_once(ROOT.DS.'lib'.DS.'smarty'.DS.'Smarty.class.php');

        $smarty = new Smarty();

        $smarty->setTemplateDir(VIEWS_PATH.DS.'templates'.DS.$this->controller_dir);
        $smarty->setCompileDir(VIEWS_PATH.DS.'templates_c');
        $smarty->setConfigDir(VIEWS_PATH.DS.'configs');
        $smarty->setCacheDir(VIEWS_PATH.DS.'cache');

        $smarty->assign('data', $this->data);

        $content = $smarty->fetch( $this->template_name );

        return $content;
    }
}