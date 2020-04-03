<nav>
    <ul>
        <?php foreach (glob("*.php") as $file) : ?> 
       
            <li><a href=<?= $file ?>></a></li>

        <?php endforeach ?>
    </ul>
</nav>