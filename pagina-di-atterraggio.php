<?php 
// salvo nelle variabili i dati provenienti dal form

$valid_data = true;

// isset() restituisce true se il dato esiste e empty() restiruisce true se il dato è vuoto
// controllo che la chiave badword esista e non sia vuota
if(isset($_POST['badword']) && !empty($_POST['badword'])){
  $badword = $_POST['badword'];
}else{
  $valid_data = false;
  $badword = 'NESSUN DATO RICEVUTO';
}

if(isset($_POST['paragrafo']) && !empty($_POST['paragrafo'])){
  $paragrafo = $_POST['paragrafo'];
}else{
  $valid_data = false;
  $paragrafo = 'NESSUN PARAGRAFO RICEVUTO';
}

// misuro la lunghezza del paragrafo
$paragrafo_len = strlen($paragrafo);

// sostituisco la parola chiave con asterischi
$paragrafo_corretto = str_replace($badword, '***', $paragrafo);

// misuro la lunghezza del paragrafo corretto
$paragrafo_corretto_len = strlen($paragrafo_corretto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>
<body>

<?php if($valid_data): ?>
  <div class="container my-5">
      <h2>Paragrafo originale</h2>
      <p><?php echo $paragrafo ?></p>
      <em>Il paragrafo è lungo <?php echo $paragrafo_len ?> caratteri</em>
      
      <h2>Paragrafo corretto</h2>
      <p><?php echo $paragrafo_corretto ?></p>
      <em>Il paragrafo corretto è lungo <?php echo $paragrafo_corretto_len = strlen($paragrafo_corretto);
  ?> caratteri</em>
  </div>

<?php else: ?>
  <div class="container my-5">
    <h2>Dati non validi</h2>
  </div>
<?php endif; ?>
  
</body>
</html>