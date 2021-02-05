<?php


class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    public function getId()
    {
      return $this->id;
    }

    // public function setId($id)
    // {
    //   $this->id = $id;
    // }

    public function getTitle()
    {
      return $this->title;
    }

    // public function setTitle(string $title)
    // {
    //   $this->title = $title;
    // }

    public function __construct(int $id, string $title)
    { $this->id = $id;
     if ($id<=0) {
       throw new InvalidArgumentException('id не может быть равно или меньше 0');
      }
      $this->title = $title;
      if (strlen($title) > 10){
        throw new InvalidArgumentException('слишком длиное наименование title');
      }
    }

    public function getPrice()
    {
      return $this->price;
    }

    public function setPrice(int $price)
    { if ($price <= 0) {
      throw new InvalidArgumentException('price не может быть равно или меньше 0');
      }
      $this->price = $price;
    }

    public function getMaterial()
    {
      return $this->material;
    }

    public function setMaterial(string $material)
    { if (strlen($material) < 3){
      throw new InvalidArgumentException('слишком короткое наименование material');
      }
      $this->material = $material;
    }
    // значения свойств title и id должны задаваться через конструктор,
    // добавить все необходимые геттеры и сеттеры
}
