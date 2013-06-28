<?php
$title = $data->title;
$description = $data->description;
$link = $data->link;
$language = $data->language;
$item = $data->item;
echo "<h2>".$title."</h2><br>";
echo "<ul>";

foreach($data->item as $list) {
    echo "<li><a href='$list->link' title='$list->title'>" . $list->title . "</a></li>";
}
echo "</ul>";
