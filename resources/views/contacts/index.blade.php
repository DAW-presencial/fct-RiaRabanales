@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-sm-10">
       <h1 class="display-3 my-3">Contactos</h1>

       <!-- Aviso de success -->
       <div class="col-10">
        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
        </div>

       <!-- Tabla de creación de contacto -->
       <table class="table table-striped">
        <thead>
            <tr class="text-center">
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Ocupación</th>
              <th>Población</th>
              <th>Ciudad</th>
              <th colspan = 2>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>{{$contact->first_name}} {{$contact->last_name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->job_title}}</td>
                <td>{{$contact->city}}</td>
                <td>{{$contact->country}}</td>
                <td class="d-flex justify-content-end">
                    <a href="{{ route('contacts.edit', $contact->id)}}" class="btn btn-primary btn-sm">editar</a>
                </td>
                <td>
                    <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-sm" type="submit">eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

        <!-- Botón de crear contacto -->
        <div class="d-flex justify-content-center">
            <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nuevo contacto</a>
        </div>
    </div>
</div>

@endsection