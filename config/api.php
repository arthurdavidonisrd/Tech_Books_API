<?php

$api_key = 'AIzaSyAFOxMNN6sNa8zSpVV7DnhDsvRisiP3emY';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search_term'])) {

    $search_term = $_POST['search_term'];

    $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($search_term) . "&key=" . $api_key;

    $response = file_get_contents($url);

    $data = json_decode($response, true);

    if (isset($data['error'])) {
        echo "Erro: " . $data['error']['message'];
    } else {
        // Exibe os resultados
        foreach ($data['items'] as $item) {
            echo "<h2>" . $item['volumeInfo']['title'] . "</h2>";
            echo "<img src='" . $item['volumeInfo']['imageLinks']['thumbnail'] . "' alt='Capa do livro'>";
            echo "<p>Autores: " . implode(", ", $item['volumeInfo']['authors']) . "</p>";
            echo "<p>Editora: " . $item['volumeInfo']['publisher'] . "</p>";
            echo "<p>Ano de publicação: " . $item['volumeInfo']['publishedDate'] . "</p>";
            echo "<p>Descrição: " . $item['volumeInfo']['description'] . "</p>";
            echo "<hr>";
        }
    }
}
?>