<?php

require('./app/functions.php');

$message = filter_input(INPUT_GET, 'message');
$username = filter_input(INPUT_GET, 'username');

include('./app/_header.php');

?>

<p><?= h($message); ?> by <?= h($username); ?></p>
<p><a href="index.php">Go Back</a></p>

<?php

include('./app/_footer.php');
