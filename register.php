<?php
$register_form = true;
require_once "lib/autoload.php";

BasicHead();
?>
<body>

<div class="jumbotron text-center">
    <h1>Registratie</h1>
</div>

<div class="container">
    <div class="row">

        <?php
        print LoadTemplate("register");
        ?>

    </div>
</div>

</body>
</html>