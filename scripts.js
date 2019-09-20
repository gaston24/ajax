


function agregarlineacompleta(){

  $("tbody").prepend("<tr><td></td><td><input type='text' class='form-control-plaintext' id='nombre_nuevo' value=''></td><td><input type='text' class='form-control-plaintext' id='pass_nuevo' value=''></td><td><input type='text' class='form-control-plaintext' id='permisos_nuevo' value='1'></td><td><input type='text' class='form-control-plaintext' id='dsn_nuevo' value='SIN'></td><td><input type='text' class='form-control-plaintext' id='descripcion_nuevo' value=''></td><td><input type='text' class='form-control-plaintext' id='codclient_nuevo' value=''></td><td><input type='text' class='form-control-plaintext' id='nrosucurs_nuevo' value='0'></td><td><input type='text' class='form-control-plaintext' id='codvended_nuevo' value='0'></td><td><input type='text' class='form-control-plaintext' id='tango_nuevo' value='NO'></td><td><span class='badge badge-info' style='cursor: pointer' onclick='agregar(nombre_nuevo.value, pass_nuevo.value, permisos_nuevo.value, dsn_nuevo.value, descripcion_nuevo.value, codclient_nuevo.value, nrosucurs_nuevo.value, codvended_nuevo.value, tango_nuevo.value)'>Agregar</span></td></tr>");

}


function agregar(a, b, c, d, e, f, g, h, i) {
	console.log(a, b, c, d, e, f, g, h, i);

	
	$.ajax({
		url: 'insert.php',
		method: 'POST',
		data: {
			
			nombre: a,
			pass: b,
			permisos: c,
			dsn: d,
			descripcion: e,
			codclient: f,
			nrosucurs: g,
			codvended: h,
			tango: i
		},
		success: function(data) {
			console.log(data);
		}
	});
	
}






function modificar(a, b, c, d, e, f, g, h, i, j) {
	//console.log(a, b, c, d, e, f, g, h, i, j);

	$.ajax({
		url: 'update.php',
		method: 'POST',
		data: {
			id: a,
			nombre: b,
			pass: c,
			permisos: d,
			dsn: e,
			descripcion: f,
			codclient: g,
			nrosucurs: h,
			codvended: i,
			tango: j
		},
		success: function(data) {
			console.log(data);
		}
	});
}




function filtrar() {
	var input, filter, table, tr, td, td2, i, txtValue;
	input = document.getElementById('textBox');
	filter = input.value.toUpperCase();
	table = document.getElementById("table");
	tr = table.getElementsByTagName('tr');
	

	for (i = 0; i < tr.length; i++) {
		visible = false;
		/* Obtenemos todas las celdas de la fila, no sólo la primera */
		td = tr[i].getElementsByTagName("td");

		for (j = 0; j < td.length; j++) {
			if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
				visible = true;
			}
		}
		if (visible === true) {
			tr[i].style.display = "";
		} else {
			tr[i].style.display = "none";
		}
	}
}

function eliminar(a, b){
	
	$.ajax({
		url: 'delete.php',
		method: 'POST',
		data: {
			
			id: a
		},
		success: function(data) {
			console.log(data);
		}
	});
		
	var table = document.getElementById("table");
	var tr = table.getElementsByTagName('tr');
	$(tr[b]).remove()

    	
}


