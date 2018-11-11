<?php /** @var \Service\UserService $data*/
?>
<h1>Congratulations, <?php try{ echo $data->get_current()->getUserId();} catch (Exception $e) {var_dump($e);}; ?></h1>
Go to <a href="login.php">login</a>