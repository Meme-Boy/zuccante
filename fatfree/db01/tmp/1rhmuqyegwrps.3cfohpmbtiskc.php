<!DOCTYPE html>
<html>
  <head>
    <title>DB01</title>
  </head>
<body>

<h1>A database example</h1>

<form action="/" method="post">
  code:<br>
  <input type="text" name="code" value="PAN">
  <br>
  name:<br>
  <input type="text" name="name" value="gioppini">
  <br>
  quantity:<br>
  <input type="text" name="quantity" value="0">
  <br>
  price:<br>
  <input type="text" name="price" value="0">
  <br><br>
  <input type="submit" value="Inserisci">
</form> 
<br><br><br>
<table>
  <tr>
    <th>name</th>
    <th>quantity</th> 
    <th>price</th>
  </tr>
  <?php foreach (($result?:[]) as $item): ?>
    <tr>
      <td><?= $item['name'] ?></td>
      <td><?= $item['quantity'] ?></td> 
      <td><?= $item['price'] ?></td>
    </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
