<?php

class Controllers {
   protected $route;
   protected $views;

   public function __construct($route) {
      $this->route = $route;
      $this->views = new Views($route);
   }

}
