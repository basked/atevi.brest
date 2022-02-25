<?php
/*
 *  Дмитрий Мисюля
 *  Урок 5: Циклы
 *  Задача 3: Квадраты чисел
 *    Цель задачи - сформировать html-код списка для отображению меню на сайте. Похожий подход мы
        будем использовать в занятии "Создание интернет магазина №1".
        • Сформируйте массив (10 элементов) со строками вида:
                  Кнопка 10
                  Кнопка 9
                  Кнопка 8
                  …
                  Кнопка 1
        • Отсортируйте массив в обратном порядке любым способом. Если возникают сложности,
        посмотреть сюда. Получить такой результат:
                  Кнопка 1
                  Кнопка 2
                  …
                  Кнопка 10
        • При помощи echo, операторов склеивания и цикла foreach получить и вывести на экран
        такой html-код:
                 <ul>
                 <li><a href="#">Кнопка 1</a></li>
                 <li><a href="#">Кнопка 2</a></li>
                 <li><a href="#">Кнопка 3</a></li>
                 ...
                 <li><a href="#">Кнопка 10</a></li>
                 </ul>
 * */
// массив кнопок
$buttons = array(
    'Кнопка 10',
    'Кнопка 9',
    'Кнопка 8',
    'Кнопка 7',
    'Кнопка 6',
    'Кнопка 5',
    'Кнопка 3',
    'Кнопка 1',
    'Кнопка 4',
    'Кнопка 2',
);
// сортируем массив
natsort($buttons);
echo '<ul>';
foreach ($buttons as $button) {
    echo '<li><a href="#">' . $button . '</a></li>';
};
echo '</ul>';