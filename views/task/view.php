<?php

?>


<h1>Задание: <?=$task->name?></h1>
<p>Описание: <?=$task->description?></p>
<p>Пользователь: <?=$task->user->username?></p>
<p>Дата создания: <?=$task->create_at?></p>
<p>Дата обновления: <?=$task->update_at?></p>