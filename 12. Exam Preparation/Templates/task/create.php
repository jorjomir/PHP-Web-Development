<?php /** @var \DTO\EditDTO $data */ ?>
<form method="post">
    Title: <input type="text" name="title"><br/>
    Description: <input type="text" name="description"><br/>
    Category: <select name="category_id">
        <?php foreach ($data->getCategories() as $category): ?>
            <option value="<?=$category->getCategoryId(); ?>"><?= $category->getName(); ?></option>
        <?php endforeach; ?>
    </select><br />
    Location: <input type="text" name="location"><br/>
    Started on: <input type="date" name="started_on"><br/>
    Due to: <input type="date" name="due_date"><br/>
    <button type="submit" name="save">Create</button>
</form>