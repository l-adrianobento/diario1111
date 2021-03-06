<section class="full-post container">
	<div class="row no-gutters justify-content-center">
		<div class="post col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<?php if(isset($post) && $post): ?>
				<div class="titulo"><?php echo $post['Pais']; ?></div>
				<div class="subtitulo"><?php echo $post['Localidade']; ?></div>
				<div class="data">Postado em <?php echo $post['DtCreated']; ?></div>
				<div class="texto">
					<?php echo $post['TxtPost']; ?>						
				</div>
				<div class="colaborador">Por <?php echo $post['Colaborador']; ?></div>
			<?php else: ?>
				<p class="nao-encontrado">Post n���o encontrado! :/	
			<?php endif; ?>
		</div>
	</div>

	<div id="modal-view" class="modal">
		<span class="close">&times;</span>
		<img class="modal-content" id="modal-img">
		<div id="modal-titulo"></div>
	</div>
</section>

<section class="container-comment container">
	<div class="form-comment row justify-content-center">
		<form action="" class="col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<div class="row no-gutters">
				<textarea name="comment" id="comment" class="col-12" rows="3"></textarea>
			</div>
			<div class="row no-gutters justify-content-end enviar">
				<button >Enviar comentário</button>
			</div>
		</form>
	</div>

	<div class="all-comments no-gutters row justify-content-center">

		<div class="a-comment col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<p>Texto com comentario</p>
			<span>12/05/2018</span>
			<div class="divider"></div>
		</div>

		<div class="a-comment col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<p>Texto com comentario</p>
			<span>12/05/2018</span>
			<div class="divider"></div>
		</div>

		<div class="a-comment col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<p>Texto com comentario</p>
			<span>12/05/2018</span>
			<div class="divider"></div>
		</div>
		
</section>


<script type="text/javascript">
	$(document).ready(function(){
		var modal = document.getElementById('modal-view');
		var modalImg = document.getElementById("modal-img");

		var img = document.getElementsByClassName('img-modal');

		for(var i = 0; i < img.length; i++){
			var tituloText = document.getElementById("modal-titulo");
			img[i].onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				tituloText.innerHTML = this.alt;
			}
		}

		var span = document.getElementsByClassName("close")[0];

		span.onclick = function() { 
			modal.style.display = "none";
		}

	});
</script>