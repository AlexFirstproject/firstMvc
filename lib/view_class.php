<?php

class View
{
    protected $data;
    //protected $path;
    protected $controller_dir = null;
    protected $template_name;

    /*protected function getDefaultViewPath()
    {
        $router = App::getRouter();
        if (!$router){
            return false;
        }

        $this->controller_dir = $router->getController();
        $this->template_name = $router->getMethodPrefix().$router->getAction().'.tpl';

        //$this->controller_dir = $router->getController();
        //$this->template_name = $router->getMethodPrefix().$router->getAction().'.tpl';
        //return VIEWS_PATH.DS.'templates'.DS.$controller_dir.DS.$template_name;
    }*/

    public function __construct($data = array(), $path = null)
    {
        $router = App::getRouter();
        if (!$router){
            return false;
        }

        if (!$path){
            $this->controller_dir = $router->getController();
            $template_name = $router->getMethodPrefix().$router->getAction().'.tpl';
            //$path = self::getDefaultViewPath();
        }else{
            $template_name = $path;
        }
        /*if (!file_exists($path)){
            throw new Exception('Template file is not found in path: '.$path);
        }*/
        $this->data = $data;
        $this->template_name = $template_name;
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

        /*$data = $this->data;

        ob_start();
        include($this->path);
        $content = ob_get_clean();*/

        return $content;
    }
}