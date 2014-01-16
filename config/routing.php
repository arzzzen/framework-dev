<?php
  $this->routes = array(
    array(
      'path'       => '/^\/$/',
      'controller' => 'Main',
      'action'     => 'index'
      ),
    array(
      'path'       => '/\/page\/([\d]+)/',
      'controller' => 'Main',
      'action'     => 'page'
      ),
    array(
      'path'       => '/^\/twig$/',
      'controller' => 'Main',
      'action'     => 'twig'
      ),
    array(
      'path'       => '/^\/page\/add$/',
      'controller' => 'Main',
      'action'     => 'pageAdd'
      ),
    array(
      'path'       => '/^\/pages$/',
      'controller' => 'Main',
      'action'     => 'pages'
      )
    );
?>