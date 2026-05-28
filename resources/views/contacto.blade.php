@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<h2>Contacto</h2>

<p>Podés comunicarte con nosotros:</p>

@isset($email)
    <p><strong>Email:</strong> {{ $email }}</p>
@endisset

<form>
    <label>Nombre:</label><br>
    <input type="text"><br><br>

    <label>Mensaje:</label><br>
    <textarea rows="5"></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

@endsection
