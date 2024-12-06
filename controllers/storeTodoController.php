<?php

(new \App\Todo())->store($_POST['title'],$_POST['due_date']);
redirect('/todos');
