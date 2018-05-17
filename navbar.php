

<div class="topnav" id="myTopnav">
  <a href="http://localhost/Bootrstrap/Bootstrap-Eindopdracht/" class="active">Home</a>
  <a href="http://localhost/Bootrstrap/Bootstrap-Eindopdracht/Directory's/pagina1.php">Formulier</a>
  <a href="http://localhost/Bootrstrap/Bootstrap-Eindopdracht/Directory's/pagina2.php">Pagina 2</a>
  <a href="http://localhost/Bootrstrap/Bootstrap-Eindopdracht/Directory's/pagina3.php">Pagina 3</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>