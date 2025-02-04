
<!DOCTYPE html>
<html>
<body>
<h1>Library</h1>
<div style="width: 70%; border:1px solid; display: flex; flex-wrap:wrap; align-content:center;">
    <div>
        <h3>Featured books:</h3>
    </div>
</div>
<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

//set session array
if (!isset($_SESSION['books_authors_prices'])){
	$_SESSION['books_authors_prices'] = array(
   		 array("title" => "1984", "author" => "George Orwell", "price" => "10.99"),
    		array("title" => "Silmarillion", "author" => "J.R.R. Tolkien", "price" => "15.99")
	);
}

//userinput 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $price = $_POST["price"];

        $new_book = array("title" => $title, "author" =>  $author, "price" => $price);
        array_push($_SESSION['books_authors_prices'], $new_book);
}

$books_authors_prices = $_SESSION['books_authors_prices'];

echo "<table border='1'>";
echo "<tr><th>Book</th><th>Author</th><th>Price</th></tr>";

// tablica
foreach ($books_authors_prices as $book) {
    echo "<tr><td>{$book['title']}</td><td>{$book['author']}</td><td>\${$book['price']}</td></tr>";
}

echo "</table>";
?>
<div style="width: 70%; border:1px solid; display: flex; flex-wrap:wrap; align-content:center;">
	<div style="padding: 2rem;">
		<h3>Add new books:</h3>
	</div>
	<div style="padding: 2rem;">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		TITLE: <input type="text" name="title" required>
		<hr>
		AUTHOR: <input type="text" name="author" required>
		<hr>
		PRICE: <input type="text" name="price" required>
		<br>
		<input type="submit" value="Add Book">
	</form>
	</div>
</div>
</body>
</html>
