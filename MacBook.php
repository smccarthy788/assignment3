<?php
  // this file will extend PArentClass.php

  class MacBook extends Computer {
      private const $brand = "Apple";
      private $model;
      private $processor;
      private $ram;
      private $storage;

      public function __construct($model, $processor, $ram, $storage){
        $this->model = $model;
        $this->processor = $processor;
        $this->ram = $ram;
        $this->storage = $storage;
      }

      public function getBrand(){
        return parent::getBrand();
      }

      public function getModel(){
        return parent::getModel();
      }

      public function getProcesor(){
        return parent::getProcesor();
      }

      public function getRam(){
        return parent::getRam();
      }

      public function getStorage(){
        return parent::getStorage();
      }
  }
