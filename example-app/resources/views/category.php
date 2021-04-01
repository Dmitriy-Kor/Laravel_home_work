<?php
foreach ($categoryList as $key => $category) {
    echo "<h3>$category <a href='".route('categories.show', ['id' => $key])."'>Показать новости</a></h3>";
}
