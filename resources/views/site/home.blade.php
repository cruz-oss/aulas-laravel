@extends('site/layout')
@section('title', 'Essa é a pagina HOME')
@section('conteudo')

 {{-- Estrutura de repetição--}}

 @forelse ($frutas as $fruta)
      
     {{ $fruta }} <br>

     @empty 
     array está vazio
     
 @endforelse

@endsection