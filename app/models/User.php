<?php
  namespace models;

  use Framework\Model as Model;

  class User extends Model {
    public $login;
    public $pass;

    public function getLogin() {
      return $this->title;
    }

    public function getPass() {
      return $this->content;
    }
  }
?>