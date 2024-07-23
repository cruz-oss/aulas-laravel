@extends('site/layout')
@section('title', 'Essa é a pagina HOME')
@section('conteudo')

 {{-- Isso é um comentário --}}

 {{-- isset($nome) ? 'exite' : 'não existe' --}}

 {{$teste ?? 'padrão'}}

@endsection