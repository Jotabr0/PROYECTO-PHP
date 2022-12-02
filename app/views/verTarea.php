<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Datos de un libro</h1>

<table border="1">
   <tr>
    <th>DESCRIPCION</th>
    <th>PROVINCIA</th>
   </tr>
   
    <tr>
      <td><?php echo $tarea['descripcion']?></td>
      <td><?php echo $tarea(['provincia'])?></td>
    </tr>
    
  </table>

</body>
</html>