<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
      <?php
        echo Form::open(array('url' => 'foo/bar'));
        echo 'Nome: <br>' . Form::text('username');
        echo '<br/>';

        echo 'E-mail:<br> ' . Form::text('email');
        echo '<br/>';

        echo 'Senha:<br> ' . Form::password('password');
        echo '<br/>';

        echo Form::checkbox('name', 'value');
        echo '<br/>';

        echo Form::radio('name', 'value');
        echo '<br/>';

        echo Form::file('image');
        echo '<br/>';

        echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
        echo '<br/>';

        echo Form::submit('Clique aqui!');
        echo Form::close();
        ?>
</body>
</html>