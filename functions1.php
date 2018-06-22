<?php
function SN($name)
{
    $pop = substr($name, -2); //Возвращает последнюю букву от имени

    $male = ' пол мужской';
    $female = ' пол женский';

    if ($name == 'Никита' || $name == 'Илья' || $name == 'Петя' || $name == 'Ваня') {    //Добавляем исключения
        return $male;
    }else {

        //выполняется сравнение последней буквы имени и определения пола
        switch ($pop) {
            case 'б':
                return $male;
                break;
            case 'в':
                return $male;
                break;
            case 'г':
                return $male;
                break;
            case 'д':
                return $male;
                break;
            case 'ж':
                return $male;
                break;
            case 'з':
                return $male;
                break;
            case 'й':
                return $male;
                break;
            case 'к':
                return $male;
                break;
            case 'л':
                return $male;
                break;
            case 'м':
                return $male;
                break;
            case 'н':
                return $male;
                break;
            case 'п':
                return $male;
                break;
            case 'р':
                return $male;
                break;
            case 'с':
                return $male;
                break;
            case 'т':
                return $male;
                break;
            case 'ф':
                return $male;
                break;
            case 'х':
                return $male;
                break;
            case 'ц':
                return $male;
                break;
            case 'ч':
                return $male;
                break;
            case 'ш':
                return $male;
                break;
            case 'щ':
                return $male;
                break;
            case 'а':
                return $female;
                break;
            case 'я':
                return $female;
                break;
            case 'ь':
                return $female;
                break;

            default:
                return null;

        }
    }
}

// Тестируем функцию
 assert( null == SN('Анэ'));
 assert( ' пол мужской' == SN('Илья'));
 assert( ' пол мужской' == SN('Сергей'));
 assert( ' пол мужской' == SN('Василий'));
 assert( ' пол женский' == SN('Дарья'));
 assert( ' пол женский' == SN('Мария'));
 assert( ' пол мужской' == SN('Иван'));
 assert( ' пол женский' == SN('Ассоль'));
 assert( ' пол женский' == SN('Любовь'));