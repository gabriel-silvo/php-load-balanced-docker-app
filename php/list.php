
---

**Local**: `php/list.php`

```php
<html>
<head>
  <title>Listagem de Dados</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');

$servername = getenv("DB_HOST") ?: "mysql-db";
$username = getenv("DB_USER") ?: "root";
$password = getenv("DB_PASS") ?: "Senha123";
$database = getenv("DB_NAME") ?: "meubanco";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Falha na conexão: " . $link->connect_error);
}

$result = $link->query("SELECT * FROM dados");

echo "<h2>Registros Inseridos</h2><table border='1'><tr>
        <th>ID</th><th>Nome</th><th>Sobrenome</th><th>Endereco</th><th>Cidade</th><th>Host</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['AlunoID']}</td>
            <td>{$row['Nome']}</td>
            <td>{$row['Sobrenome']}</td>
            <td>{$row['Endereco']}</td>
            <td>{$row['Cidade']}</td>
            <td>{$row['Host']}</td>
          </tr>";
}

echo "</table>";

$link->close();
?>

</body>
</html>
