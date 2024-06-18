<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalObjectAmenitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // todo: add created_at and updated_at
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Удобства для гостей с ограниченными физическими возможностями',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'СПА и оздоровительный центр',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Фитнес-центр',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Бесплатная парковка',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Бассейн',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Можно курить',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Принадлежности для барбекю',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Ресторан',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Балкон',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Круглосуточный вход',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Отдельный вход',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Станция для зарядки автомобилей',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Коворкинг',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Патио',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60005,
            'group_title' => 'Удобства на территории',
            'title' => 'Лифт',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Продуктовый магазин',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Супермаркет',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Аптека',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Торговый центр',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Продажа овощей/фруктов',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Фитнес-центр',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Коворкинг',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Ресторан',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Парк',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Детский сад',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Остановка',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Пляж',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Река/озеро/водоём',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60321,
            'group_title' => 'Инфраструктура рядом',
            'title' => 'Метро',
        ]);


        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на сад',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на двор',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на бассейн',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на курорт',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на море',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на горы',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на город',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60329,
            'group_title' => 'Вид из окна',
            'title' => 'Вид на площадь',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Средства личной гигиены',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Мини бар',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Кофе/чай',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Регулярный клининг',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Клининг по запросу',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60277,
            'group_title' => 'Сервис',
            'title' => 'Регулярная замена болья',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Балкон',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Терраса',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Отопление',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Горячая вода',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Кондиционер',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Интернет',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Кабельное, спутниковое телевидение',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Джакузи',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Сауна',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Гардеробная',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Звукоизоляция',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Гидромассажная ванна',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Собственная ванная комната',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Ванна',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Душевая',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60313,
            'group_title' => 'Внутреннее обустройство',
            'title' => 'Унитаз',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Телевизор',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Стиральная машина',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Электрический чайник',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Кофемашина',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Холодильник',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Микроволновая печь',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Пылесос',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Посудомоечная машина',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Утюг и гладильная доска',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Домашний кинотеатр',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 60261,
            'group_title' => 'Электронная техника',
            'title' => 'Фен для волос',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Кухня/мини кухня',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Кухонный стол',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Рабочее место',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Диван',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Шкаф для одежды',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59829,
            'group_title' => 'Мебель',
            'title' => 'Мебель для детей',
        ]);

        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59981,
            'group_title' => 'Безопастность',
            'title' => 'Датчик угарного газа',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59981,
            'group_title' => 'Безопастность',
            'title' => 'Датчик дыма',
        ]);
        DB::table('rental_object_amenities')->insert([
            'group_icon' => 59981,
            'group_title' => 'Безопастность',
            'title' => 'Огнетушитель',
        ]);
    }
}
