<?php
// Database configuration
$host = 'localhost'; // Database host
$dbname = 'db_site'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL statement
    $stmt = $pdo->query("SELECT * FROM products"); // Assuming you have a 'products' table
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Place Called Me</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <nav>
        <div id="header">    
        <ul>
            <li><img id="img" src="imagens/LogoPCM.png" width="50cm" height="80cm"></img></li>
        <li><a href="index.php">Home</a></li>
             <li><a href="#chat">Chat</a></li>
             <li><a href="loja.php">Loja</a></li>
             <li><a href="contacts.php">Contact</a></li>
             <li><a href="https://www.cuf.pt/saude-a-z/sindrome-de-asperger">About</a></li>
             <li><a href="log_in.php">login</a></li>                                           
        </ul>		
        </div> 
        </nav>
    </header>

    <main>
        <h1>A Place Called Me</h1>
        <div class="hero-video">
        <iframe width="920" height="515" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
        </div>
        <div class="button-container">
            <p>Not Working?, Full screen Watch Video</p>
            <a href="https://www.youtube.com/embed/tgbNymZ7vqY" class="cta-button">Here!</a>
        </div>

        <br>
        <div class="section">
            <h2 class="section-title">Loja</h2>
            <div class="section-content">
                <div class="box"><a href="loja.php"><img src="imagens/loja.jpg" width="300"></a></div>
            </div>
        </div>

        <br>
        <div class="section">
            <h2 class="section-title">News</h2>
            <div class="section-content">
                <div class="box">News 1</div>
                <div class="box">News 2</div>
                <div class="box">News 3</div>
                <div class="box">News 4</div>
            </div>
        </div>
    </main>

    <footer>
        <p>Contact us:</p>
        <div class="footer-links">
            <a href="#">Instagram</a>
            <a href="#">Email</a>
        </div>
    </footer>
    <footer class="credit">Author: A Place call Me - Distributed By: A Place call Me></footer>
</body>
</html>