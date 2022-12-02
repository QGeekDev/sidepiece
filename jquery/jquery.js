// мы ищем все параграфы
// берём первый из них
// берём текст параграфа
// возвращаем длину текста
alert($("p")[0].innerText.length)
// or
alert($("p").get(0).innerText.length)

// получение адреса ссылки
$("a").attr("href");

// изменение адреса и заголовка ссылки
$("a").attr({
    "href": "http://anton.shevchuk.name",
    "title": "My Personal Blog"
});

// получение альтернативного текста картинки
$("img").attr("alt");

// изменение адреса картинки
$("img").attr("src", "/images/default.png");