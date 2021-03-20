@extends('layouts.header')
@section('title', 'Pelúcias')
@section('content')
    @if($mostrar)

        @foreach($pelucias as $pelucia)
                <p>Pelúcia #{{$pelucia['id']}}: {{$pelucia['texto']}}</p>
        @endforeach

        <?php
        $var_do_joao = 'Olá mundo';

        foreach($pelucias as $pelucia){
            echo "<p>Pelúcia #{{$pelucia['id']}}: {{$pelucia['texto']}}</p>";
        }
        ?>

    @else
        O aviso não será exibido!
    @endif

@endsection

