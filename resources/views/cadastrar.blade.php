    <section id="secao">
	    <div class="container">
		    <div class="m-3">
		    	<br>
				<h1>Formulário de Cadastro</h1>
			</div>

			<div class="m-5">
				<form class="m-5" action="marker/adiciona-marker.php" method="POST">
					<div class="form-group">
						<label>Nome</label>
						<input class="form-control" type="text" name="name" required="true">
					</div>
					<div class="form-group">
						<label>Endereço</label>
						<input class="form-control" type="text" name="address" required="true">
					</div>
					<div class="form-group">
						<label>Latitude</label>
						<input class="form-control" type="text" name="lat" required="true">
					</div>
					<div class="form-group">
						<label>Longitude</label>
						<input class="form-control" type="text" name="lng" required="true">
					</div>
				    
					<button class="btn btn-primary" type="submit">Cadastrar</button>
                    <a class="btn btn-primary" href="index.php">
                    	<i class="fas fa-sign-in-alt"> Login</i>
                    </a>
                   
                </form>
			</div>
		</div>
    </section>
