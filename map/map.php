<?php
/**
 * Created by PhpStorm.
 * User: Олег
 * Date: 11.04.2016
 * Time: 19:51
 * Desc: карта.
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Карта</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="../lib/jquery.min.js"></script>
    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="../js/mapScripts/geoScript2.js"></script>
    <style>
        .accept {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<div class="map-container">
    <div id="map" style="width: 600px; height: 400px;"></div>
    <div>
        Фильтр по точкам <br>
        <form action="filtration.php" method="post">
            <input name="check" type="checkbox" id="check" onchange="checStateOfkCheckBox();" checked><label for="check">Прием
                вторсырья </label><br>
            <div class="accept">
                <input name="acception[]" value="dangerousGarbage" type="checkbox" id="dangerousGarbage" checked="true"><label
                    for="dangerousGarbage">Опасные отходы </label><br>
                <input name="acception[]" value="paper" type="checkbox" id="paper" checked="true"><label
                        for="paper">Макулатура </label><br>
                <input name="acception[]" value="glass" type="checkbox" id="plastic" checked="true"><label
                        for="plastic">Пластик </label><br>
                <input name="acception[]" value="plastic" type="checkbox" id="glass" checked="true"><label
                        for="glass">Стеклотара </label><br>
                <input name="acception[]" value="metal" type="checkbox" id="metal" checked="true"><label
                        for="metal">Металлолом </label><br>
                <input name="acception[]" value="clothes" type="checkbox" id="clothes" checked="true"><label
                        for="clothes">Одежда </label><br>
                <input name="acception[]" value="other" type="checkbox" id="other" checked="true"><label
                        for="other">Иное </label><br>
            </div>
            <input name="points[]" value="events" type="checkbox" id="events" checked="true"><label for="events">Предстоящие
                мероприятия</label>
            <br>
            <input name="points[]" value="bicycle" type="checkbox" id="bicycle" checked="true"><label for="bicycle">Пункты
                велопроката </label><br>
            <input name="points[]" value="eco-cafe" type="checkbox" id="eco-cafe" checked="true"><label for="eco-cafe">Эко-кафе </label><br>
            <input name="points[]" value="shelter" type="checkbox" id="shelter" checked="true"><label for="shelter">Приюты
                для животных </label><br>
            <input name="points[]" value="vegan" type="checkbox" id="vegan" checked="true"><label for="vegan">Магазины с
                веганскими</label>
            товарами
            <br>
            <input name="points[]" value="eco-goods" type="checkbox" id="eco-goods" checked="true"><label
                for="eco-goods">Магазины с</label>
            экотоварами
            <br>
            <input type="submit" value="Отладка скрипта">
        </form>
    </div>
</div>
<script>
    function checStateOfkCheckBox() {
        if ($('#check').prop("checked"))
            $('.accept').show("fast");
        else
            $('.accept').hide("fast");
    }
</script>
</body>
</html>