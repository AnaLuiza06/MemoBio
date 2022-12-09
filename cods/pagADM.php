<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio/PagAluno</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="./styleUsua.css">
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Prompt:wght@100;200&display=swap"
			rel="stylesheet"
		/>
	</head>
    <body>

        <div class="pageUser">
                <?php 
            		include ('menuUsuario.php');
            	?>

            <section class="conteudoADM">
                <div class="containers">
                	<div class="Ncadastrados">
                		<h1>N</h1>
                		<h3>Cadastrados</h3>
                	</div>
                	<div class="Nperguntas">
                		<h1>N</h1>
                		<h3>Perguntas</h3>
                	</div>
                	<div class="graficoPlanos">
                		<p>Gráfico Planos/Mês</p>
                	</div>
                </div>
                <div class="containers">
                	<div class="tabelaUltimosCadastros">
                		<table>
                			<thead>
                				<tr>
                					<th>Código</th>
                					<th>Nome</th>
                					<th>Data de Nascimento</th>
                					<th>CPF</th>
                					<th>RG</th>
                					<th>Telefone</th>
                					<th>Plano</th>
                					<th>Pagamento</th>
                				</tr>
                			</thead>
                		</table>
                	</div>
                	<div class="graficoDificuldades">
                		<p>Gráfico de Dificuldades</p>
                	</div>
                </div>
            </section>

        </div>
        <script src="jsPagUsua.js"></script>
    </body>
</html>