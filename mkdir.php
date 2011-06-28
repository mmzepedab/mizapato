<?php


if (!copy('template.php', 'hola/index.php')) {
    echo "failed to copy ...\n";
}
?>