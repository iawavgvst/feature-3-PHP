<?php
//УРОК "КЛАССЫ". ЗАДАНИЕ:
//1. перечислить любимые 4-5 хобби (создать классы)
//2. создать объекты классов
//3. вывести результаты выполнения созданных методов
class Me
{
  public $name = 'Victoria';

  public $age = 25;

  public $hobby = 'painting';

  public $havingMentor = true;

  public function exposition(): void // насколько я понимаю, тип void нужен для того, чтобы указать не отсутствие возвращаемости значений
  {
    echo 'I often come to see any different expositions to get more knhowledge about arts and their history';
  }
}

$me = new Me();
$me->exposition();

//print_r($person) - если нужно будет вывести все свойства и метод

class Friend
{
  public $name = 'Diana';

  public $age = 24;

  public $hobby = 'vocal';

  public $haveEducation = true;

  public function singing(): void
  {
    echo 'She often sings songs of different artists, not only Russian-speaking and English-speaking';
  }
}

$friend = new Friend();
$friend->singing();

class Sister
{
  public $name = 'Veronika';

  public $age = 32;

  public $hobby = 'reading';

  public $haveMembershipInBookClub = false;

  public function reading(): void
  {
    echo 'She reads about five hours per day, usually after work';
  }
}

$sister = new Sister();
$sister->reading();

class Person
{
  public $name = 'Daniel';

  public $age = 30;

  public $hobby = 'running';

  public $haveTrainer = true;

  public function training(): void
  {
    echo 'He runs about 3 times a week for 1 hours';
  }
}

$person = new Person();
$person->training();
// я видела, что в классе можно прописать несколько методов и вывести их результаты как, например $person->methodA()->methodB (), но не уверена, сработает ли это, потому что у меня не получилось;

//УРОК "ГЕТТЕРЫ И СЕТТЕРЫЫ". ЗАДАНИЕ:
//1. Описать 4-5 животных (создать классы)
//2. Придумать Имя и "засетить" его
//3. Вывести на экран
class Pet
{
  public $breed = 'doberman';

  public $age = 4;

  public $name = 'Theodor';

  public function setName($name): void
  {
    $this->name = $name;
  }

  public function setAge($age): void
  {
    $this->age = $age;
  }
}

$pet1 = new Pet();
echo $pet1->setName('Orion');
echo $pet1->name;
echo $pet1->setAge(10);
echo $pet1->age;

$pet2 = new Pet();
echo $pet2->setName('Linden');
echo $pet2->name;
echo $pet2->setAge(8);
echo $pet2->age;

// здесь я попробовала создать несколько объектов для одного класса - т.е. у нас есть три собаки, одной породы, но с разными именами и возрастами

class Animal
{
  public $breed = 'wolfhound';

  public $name = 'Christopher';

  public $age = 13;

  public function setName($name)
  {
    $this->name = $name;
  }
}

$animal = new Animal();
echo $animal->name;
echo $animal->setName('Rinal');
echo $animal->name;

// здесь я зассетила имя объекта с точки зрения изменения свойства - сначала звали Кристофером, потом Риналем

class Creature
{
  public $breed = 'aussie';

  public $name = null;

  public $age = 0.5;

  public function setName($name)
  {
    $this->name = $name;
  }
}

$creature = new Creature();
echo $creature->setName('Noah');
echo $creature->name;
// тут я засеттила имя, которое по какой-либо причине отсутствовало у объекта

//УРОК "КОНСТРУКТОР". ЗАДАНИЕ:
//1. создать 5 точек ресторанов быстрого питания
//2. каждому ресторану описать 5 видов блюд для меню

class Restourant
{
  public $soup;

  public $dessert;

  public $drink;

  public $snack;

  public $pasta;

  public function __construct($soup, $dessert, $drink, $snack, $pasta)
  {
    echo 'КУШАЦ!!!'; // еда это святое
    $this->soup = $soup;
    $this->dessert = $dessert;
    $this->drink = $drink;
    $this->snack = $snack;
    $this->pasta = $pasta;
  }
}

$restoraunt = new Restourant('Сырный суп', 'Меренговый рулет', 'Лимонад', 'Сырное плато', 'Фетучини');
$restoraunt2 = new Restourant('Томатный суп', 'Шоколадный фондан', 'Облепиховый чай', 'Сырные шарики', 'Карбонара');
$restoraunt3 = new Restourant('Том Ям', 'Чизкейк фисташковый', 'Морс ягодный', 'Сырные палочки', 'Веганская паста из кабачков');
$restoraunt4 = new Restourant('Грибной суп', 'Банана сплит', 'Алкогольные шоты', 'Чесночные хлебцы', 'Тальятелле с рагу');
$restoraunt5 = new Restourant('Гаспачо с семгой', 'Сладкие роллы', 'Кофейный ликер', 'Мясное плато', 'Паста с лигурийским песто');

foreach ($restoraunt as $key => $item) {
  echo $key . ": ";
  echo $item;
}

foreach ($restoraunt2 as $key => $item) {
  echo $key . ": ";
  echo $item;
}

foreach ($restoraunt3 as $key => $item) {
  echo $key . ": ";
  echo $item;
}

foreach ($restoraunt4 as $key => $item) {
  echo $key . ": ";
  echo $item;
}

foreach ($restoraunt5 as $key => $item) {
  echo $key . ": ";
  echo $item;
} // я ведь правильно понимаю, что цикличный оператор будет работать с одним массивом и его нельзя применить единожды для всех?

//УРОК "НАСЛЕДОВАНИЕ". ЗАДАНИЕ:
//1. создать Человека (класс)
//2. придумать 10 разновидностей профессий и "отнаследоваться" от Человека
class Human
{
  public $name = 'Arseniy';

  public $age = 27;

  public $hobby = 'motorcycle racing';

  public $isMarried = false;

  public $pet = 'dog';
}

class Developer extends Human
{
  public function work()
  {
    echo 'I code a lot, I do not sleep much';
  }
}

$developer = new Developer();
echo $developer->name;
$developer->work();

class Lawyer extends Human
{
  public function work()
  {
    echo 'I read a lot of laws, I do not sleep much';
  }
}

$lawyer = new Lawyer ();
foreach ($lawyer as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}
// вопрос - а как тут вывести метод в наследуемом классе? потому что тут есть свойства, но метод наследуемого класса не вывелся

class Judge extends Human
{
  public function work()
  {
    echo 'I judge a lot, condemn even more, I do not sleep much';
  }
}

$judge = new Judge();
echo $judge->hobby;
$judge->work();

class Banker extends Human
{
  public function work()
  {
    echo 'I count a lot, I do not sleep much';
  }
}

$banker = new Banker();
foreach ($banker as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class Designer extends Human
{
  public function work()
  {
    echo 'I create a lot, I do not sleep much';
  }
}

$designer = new Designer();
echo $designer->age;
$designer->work();

class HR extends Human
{
  public function work()
  {
    echo 'I communicate a lot, I do not sleep much';
  }
}

$hr = new HR();
foreach ($hr as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class Writer extends Human
{
  public function work()
  {
    echo 'I think a lot, I do not sleep much';
  }
}

$writer = new Writer();
echo $writer->name;
$writer->work();

class Architect extends Human
{
  public function work()
  {
    echo 'I draw a lot, I do not sleep much';
  }
}

$architect = new Architect();
foreach ($architect as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class Physicist extends Human
{
  public function work()
  {
    echo 'I всего делаю a lot, I do not sleep much';
  }
}

$physicist = new Physicist();
echo $physicist->pet;

class FigureSkater extends Human
{
  public function work()
  {
    echo 'I train a lot, I do not sleep much';
  }
}

$figureSkater = new FigureSkater();
echo $figureSkater->isMarried;

class OfficeManager extends Human
{
  public function work()
  {
    echo 'I work a lot, I do not sleep much';
  }
}

$officeManager = new OfficeManager();
foreach ($officeManager as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

//УРОК "НАСЛЕДОВАНИЕ С КОНСТРУКТОРОМ". ЗАДАНИЕ:
//1. создать классы 6-8 растений
//2. придумать "старший\общий класс", туда записать все общие свойства
//3. создать объекты растений и вывести свойства
class Common {
  public $nutrition = 'photosynthesis';

  public $condition = 'stationary';

  public $advantage = 'air purification';

  public $contributionToWorld = 'invaluable';

  public function __construct($nutrition, $condition, $advantage, $contributionToWorld)
  {
    $this->nutrition = $nutrition;
    $this->condition = $condition;
    $this->advantage = $advantage;
    $this->contributionToWorld = $contributionToWorld;
  }
}

class AssaiPalm extends Common
{
  public $where = 'Brazil';
  public function __construct($nutrition, $condition, $advantage, $contributionToWorld)
{
  parent::__construct($nutrition, $condition, $advantage, $contributionToWorld);
}
}

$assai = new AssaiPalm('photosynthesis', 'stationary', 'air purification', 'invaluable');
foreach ($assai as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class AloeVera extends Common
{
  public $where = 'in the southern half of the Arabian Peninsula, in North Africa (Morocco, Mauritania, Egypt), as well as in Sudan, the Canary Islands, Cape Verde, and the island of Madeira';
}

$aloevera = new AloeVera('photosynthesis', 'stationary', 'air purification', 'invaluable');
foreach ($aloevera as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class SalviaHispanica extends Common
{
  public $where = 'Central and Southern Mexico, Guatemala, South America and Australia';
}

$salviaHispanica = new SalviaHispanica('photosynthesis', 'stationary', 'air purification', 'invaluable');
foreach ($salviaHispanica as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class Lingonberry extends Common
{
  public $where = 'tundra zone and deciduous forests';
}
// здесь будет аналогично

class PanaxGinseng extends Common
{
  public $where = 'Russian Federation and Far East of the Russian Federation';
}
// здесь будет аналогично

//УРОК "КОНСТРУКТОВ В КЛАССАХ НАСЛДНИКАХ". ЗАДАНИЕ:
//1. создать еще одну должность
//2. добавить свойство "зарплата"
//3. "определить его в конструкторе"
class Man
{
  public $name = 'Leonid';

  public $age = 43;

  public $generalExperience = 20;

  public function __construct($name, $age, $generalExperience)
  {
    echo 'We are going to do business, we are going to make money';
    $this->name = $name;
    $this->age = $age;
    $this->generalExperience = $generalExperience;
  }
}

class Director extends Man
{
  public $salary = '15 000 USD';

  public function __construct($name, $age, $generalExperience, $salary) //либо можно просто указать $salary
  {
    parent::__construct($name, $age, $generalExperience); // и убрать parent
    $this->salary = $salary;
  }
}

$director = new Director('Leo', '34', '26', '13 500 USD');
echo $director->salary;
// или
foreach ($director as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

//УРОК "АБСТРАКТНЫЕ КЛАССЫ". ЗАДАНИЕ:
//1. создать абстрактный класс "Здание" со свойствами: кол-во этажей, жилое здание или нет, улица, на которой находится (можно придумать + свои свойства)
//2. создать от абстрактного класса классы-наследники (5-6 классов)
//3. вывести свойства объектов"
abstract class Building
{
  public $numberOfFloors = 115;

  public $type = 'hotel';

  public $street = 'Bolshaya Tulskaya';

  public $yearOfConstruction = '1937';

  public $hotelRooms = 1130;
}

class Land extends Building
{
  public $size = '11 acres';
}

$land = new Land();
foreach ($land as $key => $item) {
  echo $key . ": ";
  echo $item . "\n";
}

class Cafes extends Building
{
  public $number = 12;
}

$cafes = new Cafes();
echo $cafes->street;

class Garden extends Building
{
  public $number = 3;

  public $type = [
    '1st' => 'flower',
    '2nd' => 'with animal',
    '3rst' => 'for family'
  ];
}

$garden = new Garden();
print_r($garden->type);

class ForChildren extends Building
{
  public $haveZone = true;
}

$forChildren = new ForChildren();
echo $forChildren->haveZone;

//УРОК "СТАТИЧЕСКИЕ МЕТОДЫ И СВОЙСТВА КЛАССОВ". ЗАДАНИЕ:
//ЗАДАНИЕ:
//1. создать класс "Калькулятор"
//2. создать 10 статиических методов вычесления
//3. вызвать статические методы
class Calculator
{
  public static function sum($a, $b, $c) // 1
  {
    $sum = $a + $b + $b;
    echo $sum;
  }

  public static $name; // 2

  public static function setName($name)
  {
    self::$name = $name;
  }

  public static function miltiplication($a, $b) // 3
  {
    $multiplaction = $a * $b;
    echo $multiplaction;
  }

  public static $age; // 4

  public static function setAge($age)
  {
    self::$age = $age;
  }

  public static function division($a, $b, $c) // 5
  {
    $division = $a / $b / $c;
    echo $division;
  }

  public static $hobby; // 6

  public static function setHobby($hobby)
  {
    self::$hobby = $hobby;
  }

  public static function subtraction($a, $b, $c, $d) // 7
  {
    $subtraction = $a - $b - $c - $d;
    echo $subtraction;
  }

  public static function sayGoodbye() // 8
  {
    echo 'Bye';
  }

  public static $a; // 9

  public static function setAll($a)
  {
    self::$a = $a;
  }

  public static $summa; // 10

  public static function setSumma($summa)
  {
    self::$summa = $summa;
  }
}

Calculator::setName('Natalia');
echo Calculator::$name;
Calculator::sum(10, 25, 25);
Calculator::miltiplication(100, 10);
Calculator::setAge(33);
echo Calculator::$age;
Calculator::division(1500, 3, 100);
Calculator::setHobby('dancing');
echo Calculator::$hobby;
Calculator::subtraction(45, 10, 5, 12);
Calculator::sayGoodbye();
Calculator::setAll('10');
echo Calculator::$a;
Calculator::setSumma('150');
echo Calculator::$summa;

//УРОК "ИНТЕРФЕЙСЫ". ЗАДАНИЕ:
//ЗАДАНИЕ:
//1. создать интерфейс для самолетов со списком методов
//2. создать классы-самолеты, реализующие интерфейс
//3. вывести на экран, что делает каждый самолет
interface Plane
{
  public function flight();

  public function transportation();

  public function salvation();

  public function journey();

  public function firefighting();

  public function control();

  public function hydraulicSowing();
}

class CommercialPlane implements Plane
{
  public function flight()
  {
    echo 'I believe I can fly';
  }

  public function transportation()
  {
    echo 'I believe I can help to transfer people';
  }

  public function salvation()
  {
    echo null;
  }

  public function journey()
  {
    echo 'Of course, it is intended for travel';
  }

  public function firefighting()
  {
    echo null;
  }

  public function control()
  {
    echo null;
  }

  public function hydraulicSowing()
  {
    echo null;
  }
}

class Warplane implements Plane
{
  public function flight()
  {
    echo 'Yes, I can do it';
  }

  public function transportation()
  {
    echo 'I can do it, too';
  }

  public function salvation()
  {
    echo 'Always';
  }

  public function journey()
  {
    echo 'From a part, if I may say so';
  }

  public function firefighting()
  {
    echo 'Yes, hundred precent';
  }

  public function control()
  {
    echo 'Excactly';
  }

  public function hydraulicSowing()
  {
    echo null;
  }
}

class CoastGuardAircraft implements Plane
{
  public function flight()
  {
    echo 'All time';
  }

  public function transportation()
  {
    echo 'If necessary';
  }

  public function salvation()
  {
    echo 'Definitely';
  }

  public function journey()
  {
    echo null;
  }

  public function firefighting()
  {
    echo null;
  }

  public function control()
  {
    echo 'I will do my best for that';
  }

  public function hydraulicSowing()
  {
    echo null;
  }
}

//УРОК "УРОВНИ (МОДИФИКАТОРЫ) ДОСТУПА: private, protected, public". ЗАДАНИЕ:
//1. своими словами привести примеры, когда нам следует использовать private, protected, public
// По сути, уровни доступа определяют область видимости методов или свойств в классах.
// Public является общедоступным, он выводится в классе обозначения, в классе-наследнике и в объектах от них.
// Private предает свойствам или методам частную область, когда нужно, чтобы свойства или методы были видны только в том классе, где они прописаны.
// Protected делает область защищенной, что означает, что ее можно увидеть в собственном классе, классе-наследнике.

// Private применяется в случаях, когда мы не хотим, чтобы какие-то методы или свойства были доступны вне нашего основного класса, потому что иначе можно сломать код.
// Например, если в классе с паролем у нас будет свойство, которое возвращает пароль доступа к системе, то лучше, чтобы он был приватным и не выводился из данного класса.

// Уровень protected предоставляет вывод не только собственному классу, но и его подклассам, однако выводить в объекты мы не сможем.
// Подобный модификатор доступа необходим, чтобы защитить данные. Инкапуслирование данных с помощьж использования protected позволит классам-наследникам считывать свойства и методы основного класса, но не позволит выводить в объекты, обеспечивая оболочку защиты.
// Например, это могут быть свойства и методы в классах, связанных с банковскими данными или любыми персональными данными
