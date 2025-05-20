<?php
//Variables
$uafor1_des = "Штурмовая механизированная бригада, активно участвующая в наступательных операциях. Отличается высокой мотивацией, дисциплиной и наличием западного вооружения.";
$uafor2_des = "3-й отдельный штурмовой батальон — подразделение с фокусом на ведение боевых действий в урбанизированной и лесистой местности. Высокая мобильность и адаптивность.";
$uafor3_des = "Спецподразделение Тимура — элитная группа ГУР МО. Основные задачи: разведка, устранение целей и глубокие рейды за линией фронта. Девиз: 'Тень и сталь'.";

$rufor1_des = "810-я отдельная бригада морской пехоты — многоцелевая штурмовая единица флота. Участвует в десантных операциях, зачистках и удержании прибрежных направлений.";
$rufor2_des = "2-я отдельная бригада специального назначения ГРУ — разведка, диверсии и поддержка наступлений. Специализация — скрытные действия, рейды, захват ключевых объектов.";
$rufor3_des = "61-ый ЦСО 'Риф'— это сплочённое сообщество единомышленников. Наш коллектив — это не просто группа людей, а настоящая команда, где каждый находит своё место и может раскрыть свой потенциал.";



$uafor1_emb = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Emblem_of_the_Azov_Battalion.svg/1558px-Emblem_of_the_Azov_Battalion.svg.png";
$uafor2_emb = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/3%D0%BE%D1%88%D0%B1%D1%80_logo.svg/800px-3%D0%BE%D1%88%D0%B1%D1%80_logo.svg.png";
$uafor3_emb = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Emblem_of_the_Defense_Intelligence_of_Ukraine.png/250px-Emblem_of_the_Defense_Intelligence_of_Ukraine.png";

$rufor1_emb = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Sleeve_patch_of_the_810th_Guards_Order_of_Zhukov_Naval_Infantry_Brigade.svg/250px-Sleeve_patch_of_the_810th_Guards_Order_of_Zhukov_Naval_Infantry_Brigade.svg.png";
$rufor2_emb = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Sleeve_patch_of_the_2nd_Separate_Special_Purpose_Brigade.svg/330px-Sleeve_patch_of_the_2nd_Separate_Special_Purpose_Brigade.svg.png";
$rufor3_emb = "https://cdn.discordapp.com/attachments/1357805748721291480/1357805749295780002/image.png?ex=682c3565&is=682ae3e5&hm=d39f45064f07b47a3c80d5281d6350398a2524185f6043a8b4170b58ee4aa053&";




//UA FORCES


$uafor1 = array         // AZOV
(
    "name" => "12-та бригада 'Азов'",
    "side" => "Ukraine",
    "description" => $uafor1_des,
    "discord" => "N/D",
    "emblem" => $uafor1_emb,
    "commander" => "Fritz"
);

$uafor2 = array         // 3 SAB
(
    "name" => "3-я Отдельная Штурмовая Бригада",
    "side" => "Ukraine",
    "description" => $uafor2_des,
    "discord" => "N/D",
    "emblem" => $uafor2_emb,
    "commander" => "Z1pSPB"
);

$uafor3 = array         // 3 GUR MO
(
    "name" => "ГУР МО",
    "side" => "Ukraine",
    "description" => $uafor3_des,
    "discord" => "N/D",
    "emblem" => $uafor3_emb,
    "commander" => "Kozak"
);




//RU FORCES


$rufor1 = array         // 810 OBRMP
(
    "name" => "810-я отдельная бригада морской пехоты",
    "side" => "Russia",
    "description" => $rufor1_des,
    "discord" => "N/D",
    "emblem" => $rufor1_emb,
    "commander" => "Intelligent"
);

$rufor2 = array         // 2 Brigade of GRU
(
    "name" => "2-Я ОБРСП ГРУ ГШ",
    "side" => "Russia",
    "description" => $rufor2_des,
    "discord" => "N/D",
    "emblem" => $rufor2_emb,
    "commander" => "Оплот"
);

$rufor3 = array         // 61 RIF
(
    "name" => "61-й ЦСО 'Риф'",
    "side" => "Russia",
    "description" => $rufor3_des,
    "discord" => "N/D",
    "emblem" => $rufor3_emb,
    "commander" => "N/D"
);