<!doctype html>
<html>
<head>
<title>Usuarios</title>
<?php 
include_once 'includes.php';
?>
</head>
<?php 
include_once 'conexion.php';
$result = odbc_exec($cid, $sql);

?>
<body>

<div class="container">

<div class="row mt-1 mb-1">
<div class="col-3"></div>
<div class="col-6"><input type="text" class="form-control form-control-sm" id="textBox" onkeyup="filtrar()" placeholder="Filtrar" autofocus ></div>
<div class="col-3"><button type="button" class="btn btn-outline-info btn-sm" onclick="agregarlineacompleta()">+</button></div>
</div>


<table class="table table-sm table-hover">
<thead>
<th>Id</th>
<th>Nombre</th>
<th>Pass</th>
<th>Permisos</th>
<th>DSN</th>
<th>Descripcion</th>
<th>Cod Cliente</th>
<th>Nro Sucursal</th>
<th>Cod Ven</th>
<th>Tango</th>
<th></th>
<th></th>
</thead>
<tbody id="table">

<?php 
$id=0;
while($v=odbc_fetch_array($result))
{
?>

<tr id="tr_<?php echo $id; ?>">


<td><input type="text" class="form-control-plaintext" id="id_<?php echo $id; ?>" value="<?php echo $v['ID']; ?>"></td>
<td><input type="text" class="form-control-plaintext" id="nombre_<?php echo $id; ?>" value="<?php echo $v['NOMBRE']; ?>"></td>
<td><input type="text" class="form-control-plaintext" id="pass_<?php echo $id; ?>" value="<?php echo $v['PASS'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="permisos_<?php echo $id; ?>" value="<?php echo $v['PERMISOS'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="dsn_<?php echo $id; ?>" value="<?php echo $v['DSN'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="descripcion_<?php echo $id; ?>" value="<?php echo $v['DESCRIPCION'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="codclient_<?php echo $id; ?>" value="<?php echo $v['COD_CLIENT'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="nrosucurs_<?php echo $id; ?>" value="<?php echo $v['NRO_SUCURS'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="codvended_<?php echo $id; ?>" value="<?php echo $v['COD_VENDED'];?>"></td>
<td><input type="text" class="form-control-plaintext" id="tango_<?php echo $id; ?>" value="<?php echo $v['TANGO']; ?>"></td>
<td>
<span class="badge badge-info" style="cursor: pointer" onclick="modificar(id_<?php echo $id;?>.value, nombre_<?php echo $id; ?>.value, pass_<?php echo $id; ?>.value, permisos_<?php echo $id; ?>.value, dsn_<?php echo $id; ?>.value, descripcion_<?php echo $id; ?>.value, codclient_<?php echo $id; ?>.value, nrosucurs_<?php echo $id; ?>.value, codvended_<?php echo $id; ?>.value, tango_<?php echo $id; ?>.value)">Grabar</span>
</td>
<td>
<span class="badge badge-danger" style="cursor: pointer" onclick="if(!confirm('La accion borra los datos. CONFIRMA?')){return false;}else{return eliminar(id_<?php echo $id;?>.value, <?php echo $id; ?>)}">Eliminar</span>
</td>

</tr>

<?php 
$id++;
} 
?>

</tbody>

</table>


</div>



</body>
<script>


</script>
</html>