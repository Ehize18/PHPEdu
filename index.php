<?php

require 'vendor/autoload.php';
require 'src/classes.php';
use App;

// Создаем объект класса MagicClass
$obj = new App\MagicClass();

// Читаем несуществующее свойство
echo $obj->foo;

// Записываем несуществующее свойство
$obj->bar = 42;

// Проверяем существование свойства
isset($obj->baz);

// Удаляем свойство
unset($obj->qux);

// Вызываем несуществующий метод
$obj->fizz(1, 2, 3);

// Вызываем несуществующий статический метод
App\MagicClass::buzz(4, 5, 6);

// Сериализуем объект
$str = serialize($obj);

// Десериализуем объект
$obj2 = unserialize($str);

// Преобразуем объект в строку
echo $obj;

// Преобразуем объект в функцию
echo $obj(7);

// Экспортируем объект
var_export($obj);

// Клонируем объект
$obj3 = clone $obj;

// Преобразуем объект в массив
var_dump($obj);

// Уничтожаем объект
unset($obj);

$T1 = new App\Point(1, 2);
$V1 = new App\Vector(3, 4);
$V2 = new App\Vector(0, 0);
$V3 = new App\Vector(-4, 3);

echo "Длина вектора V1: " . $V1->length() . "\n";
echo "Длина вектора V2: " . $V2->length() . "\n";
echo "Длина вектора V3: " . $V3->length() . "\n";

if ($V3->isPerpendicular($V1)) {
  echo "Векторы V3 и V1 перпендикулярны\n";
} else {
  echo "Векторы V3 и V1 не перпендикулярны\n";
}

$T1->move(2, 2);

echo "Координаты точки T1 после переноса: " . $T1->x . ";" . $T1->y;
?>