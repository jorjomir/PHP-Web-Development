<?php /** @var \DTO\BookDTO[] $data */ ?>
<h1>My Books</h1>
Add <a href="addBook.php">New Book</a> | <a href="profile.php">My Profile</a> | <a href="logout.php">Logout</a><br/>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($data as $book): ?>
        <tr><td><?=$book->getTitle()?></td>
            <td><?=$book->getAuthor(); ?></td>
            <td><?=$book->getGenre()->getName(); ?></td>
            <td><a href="edit.php?book_id=<?=$book->getBookId()?>">delete</a></td>
            <td><a href="delete.php?book_id=<?=$book->getBookId()?>">delete</a></td></tr>
    <?php endforeach; ?>

</table>