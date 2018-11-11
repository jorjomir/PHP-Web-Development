<?php /** @var \DTO\TaskDTO[] $data */ ?>
Add <a href="createTask.php">new task<br></a>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($data as $task): ?>

        <tr><td><?=$task->getTitle()?></td>
        <td><?=$task->getCategory()->getName(); ?></td>
        <td><?=$task->getUsername(); ?></td>
        <td>edit</td>
            <td><a href="delete.php?task_id=<?=$task->getTaskId()?>">delete</a></td></tr>
    <?php endforeach; ?>

</table>