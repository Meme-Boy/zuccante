<!DOCTYPE html>
<html>
  <head>
    <title>template01</title>
  </head>
<body>

<h1>Un secondo template di prova</h1>


<p>Hello, <?= $name ?> <?= $surname ?>!</p>
<p>Nelle carte Trevigianele figure sono: <?= $figure[0] ?>, <?= $figure[1] ?> e <?= $figure[2] ?>.</p>
<p>Sono nato nel <?= (int)1971.29+1.2e3 ?></p>

<h1>Cicliamo su di un array</h1>

<?php foreach (($fruits?:[]) as $fruit): ?>
    <p><?= trim($fruit) ?></p>
<?php endforeach; ?>

<p>Click the button to display an alert box.</p>

<button onclick="myFunction()">strukime</button>

<script>
function myFunction() {
    alert("Hello! <?= $name ?>");
}
</script>



</body>
</html>
