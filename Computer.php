<?php
  // This is the file for the parent class

  class Computer {

    private $brand;
    private $model;
    private $processor;
    private $ram;
    private $storage;

    public function __contruct($brand, $model, $processor, $ram, $storage){
      $this->brand = $brand;
      $this->model = $model;
      $this->processor = $processor;
      $this->ram = $ram;
      $this->storage = $storage;
    }

    public function getBrand(){
      return $this->brand;
    }

    public function getModel(){
      return $this->model;
    }

    public function getProcesor(){
      return $this->processor;
    }

    public function setProcessor($newProcessor){
      $this->processor = $newProcessor;
    }

    public function getRam(){
      return $this->ram;
    }

    public function setRam($newRam){
      $this->ram = $newRam;
    }

    public function getStorage(){
      return $this->storage;
    }

    public function setStorage($newStorage){
      $this->storage = $newStorage;
    }

    public function __toString(){
      return $this->getBrand()."\nModel".$this->getModel()."\nSpecs:\nProcessor: ".$this->getProcesor()."\nRAM: ".$this->getRam()."\nStorage: ".$this->getStorage();
    }
  }
