// cara mengakses MySQL menggunakan mysqli, object oriented way:
$mysqli = new mysqli('localhost', 'username', 'password', 'database');
$result = $mysqli->query("SELECT * FROM mahasiswa");
$row = $result->fetch_assoc();

// cara mengakses MySQL menggunakan mysqli, procedural way:
$mysqli = mysqli_connect('localhost', 'username', 'password', 'database');
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa");
$row = mysqli_fetch_assoc($result);

// cara mengakses MySQL menggunakan PDO:
$pdo = new PDO('mysql:host=localhost;dbname=universitas', 'root', 'qwerty');
$statement = $pdo->query("SELECT * FROM mahasiswa");
$row = $statement->fetch(PDO::FETCH_ASSOC);
