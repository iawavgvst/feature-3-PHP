<?php
//УРОК "КЛАССЫ". ЗАДАНИЕ:
//1. перечислить любимые 4-5 хобби (создать классы)
//2. создать объекты классов
//3. вывести результаты выполнения созданных методов
class Person{
  public $name = 'Victoria';

  public $age = 25;

  public $hobby = 'painting';

  public $havingMentor = true;

  public function exposition() {
    echo 'I often come to see any different expositions to get more knhowledge about arts and their history';
  }
}

$person = new Person();
$person->exposition();
//print_r($person) - если нужно будет вывести все свойства и метод

class Friend
{
  public $name = 'Diana';

  public $age = 24;

  public $hobby = 'vocal';

  public $haveEducation = true;

  public function singing() {
    echo 'She often sings songs of different artists, not only Russian-speaking and English-speaking';
  }

  public function coaching() {
    echo 'She also has a lot of experience for explaining any secrets of singing to somebody';
  }
}

$friend = new Friend();
$friend->singing()->coaching();
