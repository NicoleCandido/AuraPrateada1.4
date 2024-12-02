<?php
session_start();
session_unset();  // Destrói todas as variáveis de sessão
session_destroy();  // Destrói a sessão

// Redireciona o usuário para a página inicial
header("Location: index.php");
exit();
?>
