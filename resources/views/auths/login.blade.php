@extends('layouts.app')

@section('login')
<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<form action="/" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Tu email"
            name="email"
        >
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu Password"
            name="password"
        >
    </div>
    <input type="submit" class="boton" value="Iniciar sesion"> 
</form>

<div class="acciones">
    <a href="/createAccounts">¿Aùn no tienes una cuenta? Crear una</a>
    <a href="/forget">¿Olvidaste tu password?</a>
</div>
@endsection