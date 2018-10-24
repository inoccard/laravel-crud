@extends('layouts.lform')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Envie seu formulário</div>

                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
