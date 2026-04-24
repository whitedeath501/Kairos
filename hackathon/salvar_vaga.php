<?php
// 1. Conecta no banco de dados (usando a porta 3307 que você configurou)
$host = "127.0.0.1:3307";
$user = "root";
$pass = "";
$db   = "kairos_db";

$conn = mysqli_connect($host, $user, $pass, $db);

// 2. Verifica se a conexão funcionou
if (!$conn) {
    die("Erro ao conectar no banco: " . mysqli_connect_error());
}

// 3. Pega os dados que vieram do formulário (do seu <form>)
// Os nomes dentro dos colchetes [''] devem ser iguais ao 'name' do seu HTML
$titulo      = $_POST['titulo'];
$empresa     = $_POST['empresa'];
$localizacao = $_POST['localizacao'];
$descricao   = $_POST['descricao'];

// 4. Monta o comando SQL para inserir as informações na tabela
$sql = "INSERT INTO vagas (titulo, empresa, localizacao, descricao) 
        VALUES ('$titulo', '$empresa', '$localizacao', '$descricao')";

// 5. Executa o comando e verifica se deu certo
if (mysqli_query($conn, $sql)) {
    // Se der certo, mostra um aviso e volta para a página inicial
    echo "<script>
            alert('Vaga cadastrada com sucesso no Banco de Dados!');
            window.location.href='index.php'; 
          </script>";
} else {
    // Se der erro, mostra o que aconteceu
    echo "Erro ao salvar no banco: " . mysqli_error($conn);
}

// 6. Fecha a conexão para não gastar memória
mysqli_close($conn);
?>