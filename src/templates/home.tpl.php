<?php
include 'partials/header.tpl.php';
?>
<body>
    <hader>
        <h1><?=$title;?></h1>
</header>
<?php include 'partials/nav.tpl.php'; ?>

<form action="?url=logaction" method="POST">
    Email: <input type="email" name="email" id="" placeholder="email"><br><br>
    Contraseña: <input type="password" name="password" id="" placeholder="password"><br><br>
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