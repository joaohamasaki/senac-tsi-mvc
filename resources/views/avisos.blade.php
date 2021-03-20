
@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/mãe ^ ^ </p>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <br><br>
    <p>Olá, {{ $nome }}! Veja os avisos de hoje!<p>

    @if($mostrar)

        @foreach($avisos as $aviso)
                <p>Aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>
        @endforeach

        <?php
        $var_do_joao = 'Olá mundo';

        foreach($avisos as $aviso){
            echo "<p>Aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>";
        }
        ?>

    @else
        O aviso não será exibido!
    @endif

Var do Joao: {{$var_do_joao}}


@endsection
