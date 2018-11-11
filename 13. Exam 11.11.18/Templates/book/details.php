<?php /** @var \DTO\BookDTO $data */?>
<h1>VIEW BOOK</h1>
<a href="profile.php">My Profile</a><br/>
<b>Book Title:</b> <?=$data->getTitle()?><br/>
<b>Book Author:</b> <?=$data->getAuthor()?><br/>
<b>Description:</b> <?=$data->getDescription()?><br/>
<b>Genre:</b> <?=$data->getGenre()->getName()?><br/>
<img src="<?=$data->getImage()?>">


