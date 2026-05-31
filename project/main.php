<?php
// Example array of articles
$articles = array(
    array("title" => "Article 1", "content" => "Content of Article 1"),
    array("title" => "Article 2", "content" => "Content of Article 2"),
    array("title" => "Article 3", "content" => "Content of Article 3")
);

// Loop through the articles array and generate <article> elements
foreach ($articles as $article) {
    echo "<article>";
    echo "<h3>" . $article['title'] . "</h3>";
    echo "<p>" . $article['content'] . "</p>";
    echo "</article>";
}
?>
