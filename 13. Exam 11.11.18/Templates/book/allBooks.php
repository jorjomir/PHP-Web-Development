<?php /** @var \DTO\BookDTO[] $data */ ?>
<h1>All Books</h1>
Add <a href="addBook.php">New Book</a> | <a href="profile.php">My Profile</a> | <a href="logout.php">Logout</a><br/>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Added By User</th>
        <th>Details</th>
    </tr>

    <?php foreach ($data as $book): ?>
        <tr><td><?=$book->getTitle()?></td>
            <td><?=$book->getAuthor(); ?></td>
            <td><?=$book->getGenre()->getName()?></td>
            <td><?=$book->getUser()->getUsername()?></td>
            <td><a href="details.php?book_id=<?=$book->getBookId()?>">Details</a></td></tr>
    <?php endforeach; ?>

</table>