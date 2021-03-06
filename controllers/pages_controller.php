<?php


class PagesController extends Controller
{
    public function __construct(array $data = array()){
        parent::__construct($data);
        $this->model = new Page();
    }

    public function index(){
        $represent = Config::get('represent_page');

        $quantity = count($this->model->getList());
        $quantityPages = intval(($quantity - 1) / $represent + 1);

        $page = htmlspecialchars(intval($_GET['page']));

        if (empty($page) or $page < 0) {
            $page = 1;
        } elseif ($page > $quantityPages) {
            $page = $quantityPages;
        }

        $start = $represent * $page - $represent;

        $this->data['pages'] = $this->model->getList($represent, $start);

        $this->data['page'] = $page;
        $this->data['quantityPages'] = $quantityPages;
    }

    public function view () {
        $params = App::getRouter()->getParams();

        if (isset($params[0])) {
            $alias = strtolower($params[0]);
            $this->data['page'] = $this->model->getByAlias($alias);
        }
    }

    public function admin_index() {
        $this->data['pages'] = $this->model->getList();
    }

    public function admin_add() {
        if ( $_POST ){
            $result = $this->model->save($_POST);
            if ( $result ) {
                //Session::setFlash('Page was saved.');
                $_SESSION['flash'] = 'Page was saved.';
            } else {
                //Session::setFlash('Error.');
                $_SESSION['flash'] = 'Error.';
            }
            Router::redirect('/admin/pages/');
            die;
        }
    }

    public function admin_edit(){
        if ( $_POST ){
            $id = isset($_POST['id']) ? $_POST['id'] : null;
            $result = $this->model->save($_POST, $id);
            if ( $result ){
                //Session::setFlash('Page was saved.');
                $_SESSION['flash'] = 'Page was saved.';
            }else{
                //Session::setFlash('Error.');
                $_SESSION['flash'] = 'Error.';
            }
            Router::redirect('/admin/pages/');
            die;
        }

        if ( isset($this->params[0]) ){
            $this->data['page'] = $this->model->getById($this->params[0]);
        } else {
            Session::setFlash('Wrong page id.');
            Router::redirect('/admin/pages/');
        }
    }

    public function admin_delete(){
        if ( isset($this->params[0]) ){
            $result = $this->model->delete($this->params[0]);
            if ( $result ){
                //Session::setFlash('Page was delete.');
                $_SESSION['flash'] = 'Page was delete.';
            }else{
                //Session::setFlash('Error.');
                $_SESSION['flash'] = 'Error.';
            }
        }
        Router::redirect('/admin/pages/');
        die;
    }
}