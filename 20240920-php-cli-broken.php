<?php

$movies = [
    1 => [
        'title' => 'Rocky',
        'Director' => 'John G. Avildsen'
    ],
    2 => [
        'title' => 'Jhon Wick',
        'Director' => ' Chad Stahelski'
    ]
];


function showAllMovies() {
    foreach ($movies as $key => $movies) {
        displayMovie($key, $movies[$key]);
    }
}

function showMovie($movies) {
    displayMovie( $movies[$id]);
}

function addMovie($movies) {
    $title = readline("Enter title: ");
    $director = readline("Enter director: ");
    $movies[] = ['title' => $title, 'director' => $director];
}

function deleteMovie(&$movies) {
    $id = readline("Enter movie ID you want to delete: ");
    array_splice($movies);
}

function displayMovie($id, $book) {
    echo "ID: {$id} // Title: ". $movies['title'] . " // Director: " . $movies['director']. "\n\n";
}


echo "\n\nWelcome to the movies\n";
$continue = true; 
do {
    echo "\n\n";
    echo "1 - show all movies\n";
    echo "2 - show a movie\n";
    echo "3 - add a movie\n";
    echo "4 - delete a movie\n";
    echo "5 - quit\n\n";
    $choice = readline();

    switch ($choice) {
        case 1:
            showAllMovies($movies);
            break;
        case 2:
            showMovie($movies);
            break;
        case 3:
            addMovie($movies);
            break;
        case 4:
            deleteMovie($movies);
            break;
        case 5:
            echo "Goodbye!\n";
            $continue = true;
            break;
        case 13:
            print_r($movies); 
            break;
        default:
            echo "Invalid choice\n";
    };

} while ($continue == true);
