<?php
echo "<h1>Главная страница! </h1>";
foreach ($categoryList as $key => $category) {
    echo "<a href='" . route('categories.show', ['id' => $key]) . "'>{$category}</a> ";
}
echo "<h2>Список новостей:</h2>";
foreach ($newsList as $key => $news) {
    $key++;
    echo "<h3>$news <a href='" . route('news.show', ['id' => $key]) . "'>Показать полностью</a></h3>";
}
