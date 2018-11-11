
<?php /** @var \DTO\BookDTO $data */?>
<h1>EDIT BOOK</h1>
<a href="profile.php">My Profile</a><br/>
<form method="post">
    Book title: <input type="text" value="<?= $data->getTitle();?> name="title" minlength="3" maxlength="50"><br/>
    Book Author: <input type="text" name="author" minlength="3" maxlength="50"><br/>
    Description: <input type="text" name="description" minlength="10" maxlength="10000"><br/>
    Image URL: <input type="text" name="image"><br/>
    Genre: <select name="genre_id">
        <?php foreach ($data->getGenres() as $genre): ?>
            <option value="<?=$genre->getGenreId(); ?>"><?= $genre->getName(); ?></option>
        <?php endforeach; ?>
    </select><br />
    <button type="submit" name="save">Add</button>
</form>