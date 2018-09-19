function agregardatos(nombre,apellido,lpu,sexo,origen,fechaingreso,egraloj,edad,nacionalidad,motivo,
	tipoingreso,fechanacimiento,condsexual,civil,sitlegal,juzgado,delito,articulo){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&lpu=" + lpu +
			"&sexo=" + sexo +
			"&origen=" + origen +
			"&fechaingreso=" + fechaingreso +
			"&egraloj=" + egraloj +
			"&edad=" + edad +
			"&nacionalidad=" + nacionalidad +
			"&motivo=" + motivo +
			"&tipoingreso=" + tipoingreso +
			"&fechanacimiento=" + fechanacimiento +
			"&condsexual=" + condsexual +
			"&civil=" + civil +
			"&sitlegal=" + sitlegal +
			"&juzgado=" + juzgado +
			"&delito=" + delito +
			"&articulo=" + articulo;

	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			console.log(r)
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaform(datos){

	d=datos.split('||');

	$('#idingreso').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#apellidou').val(d[2]);
	$('#lpuu').val(d[3]);
	$('#sexou').val(d[4]);
	$('#origenu').val(d[5]);
	$('#fechaingresou').val(d[6]);
	$('#egraloju').val(d[7]);
	$('#edadu').val(d[8]);
	$('#nacionalidadu').val(d[9]);
	$('#motivou').val(d[10]);
	$('#tipoingresou').val(d[11]);
	$('#fechanacimientou').val(d[12]);
	$('#condsexualu').val(d[13]);
	$('#civilu').val(d[14]);
	$('#sitlegalu').val(d[15]);
	$('#juzgadou').val(d[16]);
	$('#delitou').val(d[15]);
	$('#articulou').val(d[18]);

}

function actualizaDatos(){

	id=$('#idingreso').val();
	nombre=$('#nombreu').val();
	apellido=$('#apellidou').val();
	lpu=$('#lpuu').val();
	sexo=$('#sexou').val();
	origen=$('#origenu').val();
	fechaingreso=$('#fechaingresou').val();
	egraloj=$('#egraloju').val();
	edad=$('#edadu').val();
	nacionalidad=$('#nacionalidadu').val();
	motivo=$('#motivou').val();
	tipoingreso=$('#tipoingresou').val();
	fechanacimiento=$('#fechanacimientou').val();
	condsexual=$('#condsexualu').val();
	civil=$('#civilu').val();
	sitlegal=$('#sitlegalu').val();
	juzgado=$('#juzgadou').val();
	delito=$('#delitou').val();
	articulo=$('#articulou').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&lpu=" + lpu +
			"&sexo=" + sexo +
			"&origen=" + origen +
			"&fechaingreso=" + fechaingreso +
			"&egraloj=" + egraloj +
			"&edad=" + edad +
			"&nacionalidad=" + nacionalidad +
			"&motivo=" + motivo +
			"&tipoingreso=" + tipoingreso +
			"&fechanacimiento=" + fechanacimiento +
			"&condsexual=" + condsexual +
			"&civil=" + civil +
			"&sitlegal=" + sitlegal +
			"&juzgado=" + juzgado +
			"&delito=" + delito +
			"&articulo=" + articulo;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}



