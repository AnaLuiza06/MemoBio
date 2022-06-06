<!DOCTYPE html>
<html>
	<head>
		<title>MemoBio/PagAluno</title>
		<link rel="stylesheet" type="text/css" href="./style.css" />
		<link rel="stylesheet" type="text/css" href="./styleUsua.css">
        <link rel="stylesheet" type="text/css" href="./stylePerguntas.css">
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
        <main class="pageUser">
            	<?php 
            		include ('menuUsuario.php');
            	?>


            <section class="conteudoPergunta">
                <div class="btnAterior">
                   <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left btnAnt" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
					</svg>
                </div>
                <div class="tituloPergunta">
                    <h2>Ecologia/ Ciclos Biológicos</h2>
                </div>
                <div class="containerPergunta">
                    
                    <section class="textoPergunta">
                        <p>(ITA) A dinâmica do ciclo do carbono é muito variável, quer no espaço quer no tempo. As emissões de carbono ocorrem devido às ações dos seres vivos ou devido a outros fenômenos,
                             como uma erupção vulcânica que, por exemplo, provoca um aumento temporário de carbono na atmosfera. O sequestro (absorção) do carbono da atmosfera (CO2) é feito principalmente
                              pelos seres clorofilados que, no processo de fotossíntese, sintetizam a molécula da glicose(C6H12O6). Para manter armazenado, por longo prazo, o carbono que foi retirado da
                               atmosfera, é aconselhável:</p>
                    </section>
                    <section class="imgPergunta">
                        <img src="https://static.todamateria.com.br/upload/ca/de/cadeiaalimentarterrestre.jpg?auto_optimize=low">
                    </section>
                    <section class="conclusaoPergunta">
                        <p>Para manter armazenado, por longo prazo, o carbono que foi retirado da atmosfera, é aconselhável:</p>
                    </section>
                    <form>
	                    <section class="alternativasPergunta">
	                        
	                            <div class="alternativaA">
	                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    a) controlar as atividades vulcânicas
	                                </label>
	                            </div>
	                            <div class="alternativaB">
	                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    a) controlar as atividades vulcânicas
	                                </label>
	                            </div>
	                            <div class="alternativaC">
	                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    a) controlar as atividades vulcânicas
	                                </label>
	                            </div>
	                            <div class="alternativaD">
	                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    a) controlar as atividades vulcânicas
	                                </label>
	                            </div>
	                            <div class="alternativaE">
	                                <input type="radio" name="flexRadioDefault" id="flexRadioDefault1">
	                                <label class="form-check-label" for="flexRadioDefault1">
	                                    a) controlar as atividades vulcânicas
	                                </label>
	                            </div>
	                        
	                    </section>
	                    <section class="btnsAP">
	                        <div class="btnAterior">
	                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left btnAnt" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
								</svg>
	                        </div>
	                        <div class="btnAterior">
	                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right btnAnt" viewBox="0 0 16 16">
								  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
								</svg>
	                        </div>
	                    </section>
                    </form>
                </div>
            </section>
        </main>
        <script src="jsPagUsua.js"></script>
    </body>
</html>