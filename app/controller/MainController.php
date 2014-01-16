<?php
  namespace controller;

  use Framework\Controller as Controller;
  use Framework\Request as Request;
  use models\Page as Page;
  
  class MainController extends Controller {

    public function indexAction() {
      if (is_null(Request::getInstance()->getParam('title')))
        $name = 'Arsen';
      else
        $name = Request::getInstance()->getParam('title');
      return $this->render('index.twig', array('title' => $name, 'content' => 'The Great!'));
    }

    public function pageAction($id) {
      $page = $this->getRepository('Page')->find($id);
      return $this->render('index.twig', array('title' => $page->title, 'content' => $page->content));
    }

    public function pagesAction() {
      $pages = $this->getRepository('Page')->findAll();
      return $this->render('pages.twig', array('pages' => $pages));
    }

    public function pageAddAction() {
      if (Request::getInstance()->method === 'GET') {
        return $this->render('pageAdd.twig');
      } else {
        $page = new Page();
        $page->title = Request::getInstance()->getParam('title');
        $page->content = Request::getInstance()->getParam('content');
        $page->save();
        return $this->render('pageAdd.twig');
      }
    }

    public function twigAction() {
      return $this->render('index.twig', array('title' => 'Fabien'));
    }
  }
?>