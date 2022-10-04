
<?php include 'partials/header.tpl.php'; 
include 'partials/nav.tpl.php';
?>
<body>
<form action="?url=logaction" method="POST">
    Email: <input type="email" name="email" id="" placeholder="email">
    Contraseña: <input type="password" name="password" id="" placeholder="password">
    <button type="submit">Login</button>

</form>
<main>
    <?php
        foreach($alumnes as $alumne):?>
           <p><?= $alumne ?></p>
        
    <?php endforeach; ?>
</main>
</body>
</html>