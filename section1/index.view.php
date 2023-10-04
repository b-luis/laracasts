<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeworks</title>
    <link rel="stylesheet" href="./index.css">
    </head>
<body>
    <h1>Homeworks</h1>
    <main>
        <section>
            <h3>Topic: Associative Arrays</h3>
            <p>Task 1: Extend the book list from this episode's example to also include and display the release year immediately after the book's title.</p>
            <small><strong>Things You'll Learn: Array Access, Key-Value, Data</strong></small>
            <ul>
                <?php foreach($books as $book): ?>
                    <li>
                        <a href="<?=$book['purchaseUrl']?>"><?= $book['name']?> (<?=$book["releaseYear"]?>)</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h3>Topic: Functions and Filter</h3>
            <p>Task 2: Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list.</p>
            <small><strong>Things You'll Learn: Functions, Array Filtering, Checking for Equality</strong></small>
            <ul>
                <?php foreach(filterMovieByYear($favoriteMovies) as $movie): ?>
                    <li><a href=""><?= $movie['name']?></a></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h3>Topic: Lambda Functions</h3>
            <p>Task 3: Update your book filtering logic from this episode to only display books that were first published between the years 1950 and 2020. Hint - the PHP equivalent of "and" is &&.</p>
            <small><strong>Things You'll Learn: Lambdas, Extract Variable, array_filter</strong></small>
            <ul>
                <?php foreach($filterMovieByYearArrow as $movie): ?>
                    <li><a href=""><?= $movie['name']?> (<?= $movie['releaseYear']?>)</a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>
</html>