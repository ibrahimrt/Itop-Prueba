<?php
	require_once '../../modelos/Potencial.php';
	$pot = Potencial::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="../../css.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<title>Fórmate</title>
</head>
<body>
	<ul>
	<li><a href="../potenciales" class="no-decorate-active">Potenciales</a></li>
	<li><a href="../entidades" class="no-decorate-white">Entidades</a></li>
	<li><a href="../actividades" class="no-decorate-white">Actividades</a></li>
	<li><a href="../asignacion" class="no-decorate-white">Asignar Actividad</a></li>
	</ul>
	<div class="body-container">
		<header>
			<h1 class="text-center"><span class="border-title">Editar Potencial</span></h1>
		</header>
		<form action="../../controladores/Potenciales.php" method="post" id="formulario">
			<input type="hidden" id="id" name="id" value="<?= $_GET['id'] ?>" />
			<input name="a" value="Editar" id="query" hidden />
			<div>
				<label for="nombre">Nombre</label>
				<input name="nombre" id="nombre" placeholder="Nombre" class="input100 w-20" value="<?= $pot[1] ?>" required autofocus />
			</div>
			<div>
				<label for="apellido">Apellido</label>
				<input name="apellido"  id="apellido" placeholder="Apellido" class="input100 w-20" value="<?= $pot[2] ?>" required />
			</div>
			<div>
				<label for="dnie">DNI / NIE</label>
				<input name="dni" id="dnie"  placeholder="Dni" class="input100 w-20" onBlur="ValidarDNIE()" value="<?= $pot[3] ?>" required />
				<small id="dnieval" class="hidden">DNI en formato inválido</small>
				<small id="dniex" class="hidden">DNI se encuentra registrado</small>
			</div>
			<button class="btn btn-green float-right m-bottom-3 fs-button-13" name="a" type="submit" >Editar</button>
			</div>
		</form>
	</div>
</body>
<script>
function ValidarDNIE(){
	document.forms.formulario.dnie.classList.remove('input-invalid');
	const Letras = 'T,R,W,A,G,M,Y,F,P,D,X,B,N,J,Z,S,Q,V,H,L,C,K,E';
	var arr = Letras.split(",");
	let identif = document.getElementById('dnie').value;
	const nietest = identif.slice(0,1);
	if ( nietest == 'X' || nietest == 'x' ){
		identif = "" + 0 +identif.slice(1);
	} else if(nietest == 'Y' || nietest == 'y' ) {
		identif = "" + 1 +identif.slice(1);
	}else if( nietest == 'Z' || nietest == 'z') {
		identif = "" + 2 +identif.slice(1);
	}
	if(identif != ''){
		let letter = identif.slice(-1);
		let calcLetter = ( identif.slice(0, -1) % 23 );
		if(arr[calcLetter] == letter){
			let small = document.getElementById('dnieval');
			small.classList.add('hidden');
		}else{
			let small = document.getElementById('dnieval');
			small.classList.remove('hidden');
			document.getElementById('dnie').value = '';
			document.forms.formulario.dnie.classList.add('input-invalid');
		}
	}else{
		return ; 
	}	
}
document.getElementById("formulario").onsubmit = function() {validateExist()};
function validateExist(){
	let number = document.forms.formulario.id.value;
	let nombre = document.forms.formulario.nombre.value;
	let apellido = document.forms.formulario.apellido.value;
	let dni = document.forms.formulario.dni.value;
	if(nombre != '' && apellido != '' && dni!= ''){	
		var url = 'validateExist.php?dni=' + dni + '&update='+ number ;
		event.preventDefault()
		fetch(url, {
		method: 'GET', 
		headers:{'Content-Type': 'application/json'}
			}).then(res => res.json())
			.catch(error => console.error('Error:', error))
			.then(response => {
					if(response.respuesta.length <= 1)
					{
						document.forms.formulario.dni.value= dni;
						document.forms.formulario.submit();
					}
					else
					{
						document.forms.formulario.dnie.style.borderColor = 'red';	
						let small = document.getElementById('dniex');
						small.classList.remove('hidden');
						document.getElementById('dnie').value = "";
					}
				});
	}else{
		if(nombre == ''){
			document.forms.formulario.nombre.classList.add('input-invalid');
		}
		if (apellido == ''){
			document.forms.formulario.apellido.classList.add('input-invalid');
		}
		if (dni == ''){
			document.forms.formulario.dni.classList.add('input-invalid');
		}
		event.preventDefault();
	}
}
</script>
</html>