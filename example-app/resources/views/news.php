<?php
foreach ($newsList as $key => $news) {
    $key ++;
    echo "<h3>$news <a href='".route('news.show', ['id' => $key])."'>Показать полностью</a></h3>";
}
