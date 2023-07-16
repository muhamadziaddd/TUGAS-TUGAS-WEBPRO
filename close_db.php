// create connection MySqli, Object Oriented
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully";
$conn->close();


// create connection MySqli, procedural
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected Successfully";
mysqli_close($conn);


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Sukses Koneksi Ke Database $dbname di $host.";

    // Menutup Koneksi
    $conn = null;
} catch (PDOException $exception) {
    die("Error Koneksi ke Database $dbname: " . $exception->getMessage());
}
