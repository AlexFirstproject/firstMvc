<?php


class PagesController extends Controller
{
    public function __construct(array $data = array())
    {
        parent::__construct($data);
        $this->model = new Page();
    }

    public function index()
    {
        $this->data['pages'] = $this->model->getList();
    }

    public function view ()
    {
        $params = App::getRouter()->getParams();

        if (isset($params[0])){
            $alias = strtolower($params[0]);
            $this->data['page'] = $this->model->getByAlias($alias);
        }
    }

    public function admin_index(){
        $this->data['pages'] = $this->model->getList();
    }

    public function admin_edit(){
        if ( isset($this->params[0]) ){
            $this->data['page'] = $this->model->getById($this->params[0]);
            var_dump($this->data['page']);
        } else {
            Session::setFlash('Wrong page id.');
            Router::redirect('/admin/pages/');
        }
    }
}