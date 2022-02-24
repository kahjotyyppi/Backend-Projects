<article>
<h2>Här hittar du våra mest desperata singlar!</h2>

<form action="index.php" method="post">
<p>Sortera annonser enligt:</p>
  <input type="radio" id="salary" name="orderby" value="salary" checked="checked">
  <label for="salary">Inkomst</label><br>
  <input type="radio" id="city" name="orderby" value="city">
  <label for="city">Hemstad</label><br>
  <input type="radio" id="pref" name="orderby" value="preference">
  <label for="preference">Preferens</label><br> 
  <input type="radio" id="likes" name="orderby" value="likes">
  <label for="likes">Likes</label><br> 
  <input type="radio" id="dislikes" name="orderby" value="dislikes">
  <label for="dislikes">Dislikes</label><br> 
  <br>
  <p>Ordning:</p>
  <input type="radio" id="desc" name="descasc" value="DESC" checked="checked">
  <label for="desc">123 a->z</label><br>
  <input type="radio" id="asc" name="descasc" value="ASC">
  <label for="asc">321 z->a</label><br> 
<br>
<input type="submit" value="Sortera">
</form>

<?php $username = ($_SESSION['username']);?>


<?php

$könis = array("Män", "Kvinnor", "Män och Kvinnor", "Vad som helst!", "vill inte specifiera");

if(!empty($_REQUEST['orderby']) && !empty($_REQUEST['descasc']))
{

$order = test_input($_REQUEST["orderby"]);
$descasc = test_input($_REQUEST["descasc"]);

switch ($order)
 {
  case "salary":
    $sql = "SELECT * FROM annonser ORDER BY salary $descasc LIMIT 30";
$stmt = $conn->query($sql);
  $stmt->execute();
    break;
  case "city":
    $sql = "SELECT * FROM annonser ORDER BY city $descasc LIMIT 30";
$stmt = $conn->query($sql);
  $stmt->execute();
    break;
  case "preference":
    $sql = "SELECT * FROM annonser ORDER BY preference $descasc LIMIT 30";
    $stmt = $conn->query($sql);
      $stmt->execute();
    break;
  case "likes":
    $sql = "SELECT * FROM annonser ORDER BY likes $descasc LIMIT 30";
    $stmt = $conn->query($sql);
      $stmt->execute();
    break;
  case "dislikes":
    $sql = "SELECT * FROM annonser ORDER BY dislikes $descasc LIMIT 30";
    $stmt = $conn->query($sql);
      $stmt->execute();
    break;
  
  default:
  $sql = "SELECT * FROM annonser ORDER BY salary DESC LIMIT 30";
    $stmt = $conn->query($sql);
      $stmt->execute();
  }
}
elseif((empty($_REQUEST['orderby']) && empty($_REQUEST['descasc'])))
{
$order = "salary";
  $sql = "SELECT * FROM annonser ORDER BY $order DESC LIMIT 30";
  $stmt = $conn->query($sql);
  $stmt->execute([$order]);
}
?>

<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?> 

 <?php print("<br>");
  print("Användarnamn: ".$row['username']."<br>"); 
  print("Namn: ".$row["fullname"]."<br>"); 
  print("Stad: ".$row["city"]."<br>");
  $preferens =  $row["preference"];
  $preferens = $könis[$preferens-1];
  print("Jag söker efter: ".$preferens."<br>"); 
  print("Mer om mig: ".$row["aboutme"]."<br>"); 
  print("<br>")
  ?>

  <?php if(!isset($_SESSION['username']) == null) :
    print("Inkomst: ".$row["salary"]."€/år <br>"); 
    print("Kontakta mig: ".$row["email"]."<br>"); 
    print("<br>"); 
  ?>


<?php

echo "<h5>+" . $row['likes'] . " -" . $row['dislikes'] . "</h5>";
echo "<form action='index.php' method='POST'>";
echo "<input type='hidden' name='liked' value=" . $row['id'] . ">";
echo "<input type='submit' name='like' value='Like'>";
echo "<input type='submit' name='dislike' value='Dislike'>";
echo "</form>";

?>

<?php endif;?>
<?php endwhile; ?>
<?php include "like.php"?>
</article>
