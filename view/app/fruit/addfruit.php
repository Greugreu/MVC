<h1 style="text-align: center; margin-top: 20px; font-size: 1.5em">
    <?= $message ?>
</h1>

<form action="#" method="post" style="text-align: center; margin-top: 50px">
    <?php
    echo $form->label('title');
    echo $form->input('title');
    echo $form->error('title');

    echo $form->label('content');
    echo $form->textarea('content');
    echo $form->error('content');

    echo $form->submit();
    ?>
</form>
