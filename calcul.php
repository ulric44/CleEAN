<link rel='stylesheet' href='css/bootstrap.min.css'>
<?php
//récupération des variables
$EAN = $_POST['EAN'];

//Vérification du bon nombre de caractères
if (strlen($EAN) != 12 || $EAN < 0)
{
  echo '<BR>Veuillez saisir un numéro EAN égal à 12 caractères et supérieur à 0 .<BR>';
  echo '<BR><input class="btn btn-primary" type="submit" value="Retour" onclick=history.go(-1)>';
}
else
{
  RetourneCle($EAN);
}

function RetourneCle($EAN)
{
  $tot = 0;
  for($i = 0; $i<12; $i++)
  {
    $pair = estPair($i);
    if ($pair == true)
    {
      $tot = $tot + $EAN{$i} ;
    }
    else
    {
      $tot = $tot + $EAN{$i} * 3;
    }
  }
  $div = $tot % 10;
  if($div == 0)
  {
    $vretour =  0;
  }
  else
  {
    $div = (10 - $div);
    $vretour = ($div);
  }
  echo "la valeur de la clé pour le numéro EAN ".$EAN." est ".$vretour."<BR>";
  echo '<BR><input class="btn btn-primary" type="submit" value="Retour" onclick=history.go(-1)>';
}

function estPair($leChiffre)
{
  $vretour = false;
  if($leChiffre % 2 == 0)
  {
    $vretour = true;
  }
  return $vretour;
}
 ?>
