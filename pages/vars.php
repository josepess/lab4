<?php
$VOUCHER_TYPE = array(
    "cruise" => array(
        "name" => "Круиз",
        "description" => "На большом теплоходе сплав по реке Нил",
        "price" => 2000
    ),
    "safari" => array(
        "name" => "Сафари",
        "description" => "В жаркой пустыне под палящим солнцем насладитесь дикой жизнью её обитателей",
        "price" => 3000
    ),
    "gastrotur" => array(
        "name" => "Гастротур",
        "description" => "Этнические рестораны с изысканными блюдами местной кухни",
        "price" => 1000
    ),
);
$FOOD_TYPE = array(
    "breakfast" => array(
        "name" => "Завтрак",
        "description" => "С 8-00 до 10-00.",
        "price" => 10
    ),
    "dinner" => array(
        "name" => "Ужин",
        "description" => "С 19-00 до 22-00.",
        "price" => 20
    ),
    "pansion" => array(
        "name" => "Пансион",
        "description" => "Добавляется обед с 13-00 до 15-00.",
        "price" => 50
    ),
);

$ADDITIONAL_SERVICE = array(
    "fit_to_figure" => array(
        "name" => "Подгонка по фигуре",
        "price" => 80
    ),
    "steaming" => array(
        "name" => "Отпаривание",
        "price" => 30
    ),
    "box" => array(
        "name" => "Упаковка",
        "price" => 15
    )
);

$FIELDS = array('voucher', 'food_type', 'name', 'phone', 'email');

$COUNTRY_TYPE = array(
    "cruise" => array(
        "Italy" => array(        
        "name" => "Италия",
        "price" => 200
        ),
        "Croatia" => array(
            "name" => "Хорватия",
            "price" => 100
        ),
        "Sweden" => array(
            "name" => "Швеция",
            "price" => 300
        ),
    ),
    "safari" => array(
        "Kenia" => array(        
        "name" => "Кения",
        "price" => 500
        ),
        "Marocco" => array(
            "name" => "Марокко",
            "price" => 300
        ),
        "RSA" => array(
            "name" => "ЮАР",
            "price" => 800
        ),
    ),
    "gastrotur" => array(
        "Denmark" => array(        
        "name" => "Дания",
        "price" => 50
        ),
            "Norway" => array(
                "name" => "Норвегия",
                "price" => 100
        ),
            "France" => array(
                "name" => "Франция",
                "price" => 80
        ),
    ),
);
$ACTIVITY_TYPE = array(
    "cruise" => array(        
        "Sauna" => array(
        "description" => "Развлечения",        
        "name" => "Сауна",
        "price" => 50
        ),
        "Pool" => array(
            "description" => "Развлечения",        
            "name" => "Бассейн",
            "price" => 100
        ),
        "Bar" => array(
            "description" => "Развлечения",        
            "name" => "Бар",
            "price" => 200
        ),
    ),
    "safari" => array(
        "Feed" => array( 
        "description" => "Экскурсии",           
        "name" => "Кормление животных",
        "price" => 100
        ),
        "Photohunt" => array(
            "description" => "Экскурсии", 
            "name" => "Фотоохота",
            "price" => 50
        ),
        "Butcher" => array(
            "description" => "Экскурсии", 
            "name" => "Разделывание туши",
            "price" => 200
        ),
    ),
    "gastrotur" => array(
        "Marketplace" => array(  
        "description" => "Места",       
        "name" => "Местный рынок",
        "price" => 50
        ),
            "Cook" => array(
                "description" => "Места",  
                "name" => "Приготовление еды",
                "price" => 200
        ),
            "Wine" => array(
                "description" => "Места",  
                "name" => "Виноферма",
                "price" => 100
        ),
    ),
);
?>