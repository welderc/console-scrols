<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO modelo (
						marca_id_marca,
						nome_modelo,
						cor_modelo,
						armazenamento_modelo
					
					) VALUES (
						".$_POST["marca_id_marca"].",
						'".$_POST["nome_modelo"]."',
						'".$_POST["cor_modelo"]."',
						'".$_POST["armazenamento_modelo"]."'
					)";
					
					$res = $conn->query($sql);

					if ($res==true) {
						print "<script>alert('Cadastrou com sucesso!!!');</script>";
						print "<script>location.href='?page=modelos-listar'</script>";
					} else {
						print "<script>alert('Não foi possível!!!');</script>";
						print "<script>location.href='?page=modelos-listar'</script>";
					}
					break;
					case 'editar':
						$sql = "UPDATE modelo SET 
									marca_id_marca=" . $_POST['marca_id_marca'] . ",
									nome_modelo='" . $_POST['nome_modelo'] . "',
									cor_modelo='" . $_POST['cor_modelo'] . "',
									armazenamento_modelo='" . $_POST['armazenamento_modelo'] . "'
								WHERE
									id_modelo=" . $_POST['id_modelo'];
					

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editou com sucesso!!!');</script>";
				print "<script>location.href='?page=modelos-listar'</script>";
			} else {
				print "<script>alert('Não foi possível!!!');</script>";
				print "<script>location.href='?page=modelos-listar'</script>";
			}
			break;
		case 'excluir':
			$sql = "DELETE FROM modelo WHERE id_modelo=".$_REQUEST['id_modelo'];

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editou com sucesso!!!');</script>";
				print "<script>location.href='?page=modelos-listar'</script>";
			} else {
				print "<script>alert('Não foi possível!!!');</script>";
				print "<script>location.href='?page=modelos-listar'</script>";
			}
			break;
	}
?>