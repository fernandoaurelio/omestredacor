<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>O Mestre da Cor</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<header id="custom-header">
		<section class="header-container">
			<div class="header-logo">
				<p>O Mestre da Cor</p>
			</div>
			<div class="header-links">
				<ul>
					<li> <a href="#">Home</a> </li>
					<li><a href="#">Cursos</a></li>
					<li><a href="#">Trilha do Conhecimento</a></li>
					<li><a href="#">Live Class</a></li>
				</ul>
			</div>
			<div class="login-button">
				<a href="#">Entrar/cadastrar</a>
			</div>
		</section>
	</header>

	<section id="banner">

		<div class="banner-container">
			<div class="banner-aula" style="background-image: url('img/aula_banner.jpg');background-position: center; background-repeat: no-repeat;">
				<div class="aula-video-conteudo">					
					<h5>Titulo do Video</h5>
					<div class="aula-video">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/nKvXxqfd90M?si=XaAy5TCpKdoi61cm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="conteudo-extra">
		<div class="extra-content-section">
			<div class="extra-content-downloads">
				<h3>Downloads</h3>
				<a href="#">Download 1</a>
				<a href="#">Download 2</a>
				<a href="#">Download 3</a>
			</div>
			<div class="extra-content-text">
				<h2>Conteúdo Extra</h2>
				<p>
					Confira materiais complementares que preparamos para enriquecer seu aprendizado.
					Esta seção contém informações e recursos exclusivos para você explorar e aproveitar
					ao máximo seu aprendizado. Aproveite!
				</p>
			</div>
		</div>

	</section>
	<section id="aula">
		<div class="trilha-conteudos-total">			
			<h5>Trilha do Conhecimento</h5>
			<div class="cards-trilha-secao">
				<div class="card-trilha-container">
					<div class="card-trilha" style="background-image: url('img/thumb_curso.jpg');">
						<div class="card-trilha-badge">Aula Liberada</div>
						<div class="card-trilha-overlay">
							<div class="card-trilha-title">Card Title</div>
							<div class="card-trilha-summary">This is a short summary of the card content. It will appear on hover.</div>
						</div>
					</div>

					<div class="card-trilha" style="background-image: url('img/thumb_curso.jpg');">
						<div class="card-trilha-badge">Aula Liberada</div>
						<div class="card-trilha-overlay">
							<div class="card-trilha-title">Another Title</div>
							<div class="card-trilha-summary">Another short summary for the second card.</div>
						</div>
					</div>

					<div class="card-trilha" style="background-image: url('img/thumb_curso.jpg');">
						<div class="card-trilha-badge">Aula Liberada</div>
						<div class="card-trilha-overlay">
							<div class="card-trilha-title">Third Title</div>
							<div class="card-trilha-summary">This is the third card with its own unique summary.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="site-footer">
		<!-- Primeira seção: Logo -->
		<div class="footer-logo">
			<img src="logo.png" alt="Logo da Empresa">
			<p>Aprenda, evolua e inspire-se com os melhores cursos para cabeleireiros.</p>
		</div>

		<!-- Segunda seção: Links -->
		<div class="footer-links">
			<h3>Links Rápidos</h3>
			<ul>
				<li><a href="#cursos">Cursos</a></li>
				<li><a href="#trilha-conhecimento">Trilha do Conhecimento</a></li>
				<li><a href="#liveclass">LiveClass</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul>
		</div>

		<!-- Terceira seção: Newsletter -->
		<div class="footer-newsletter">
			<h3>Receba Novidades</h3>
			<p>Assine nossa newsletter e fique por dentro das novidades.</p>
			<form id="formnews">
				<input id="emailnews" type="email" placeholder="Seu e-mail" required>
				<a href="#">Inscrever-se</a>
			</form>
		</div>
	</footer>
	<section class="modal-home">
		<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content modal-custom">
					<!-- Cabeçalho do modal -->
					<div class="modal-header modal-header-custom">
						<h5 class="modal-title" id="loginModalLabel">Portal Mestre da Cor</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<!-- Corpo do modal -->
					<div class="modal-body">

					</div>
				</div>
			</div>

		</section>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

		<script src="js/actions.js"></script>
	</body>
	</html>