@extends('layouts.layout')
@section('contenido')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Añadir un nuevo contacto</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="post" action="{{ route('contacts.store') }}">
             @csrf
             <div class="form-group">    
                 <label for="first_name">Nombre:</label>
                 <input type="text" class="form-control" name="first_name"/>
             </div>
   
             <div class="form-group">
                 <label for="last_name">Apellidos:</label>
                 <input type="text" class="form-control" name="last_name"/>
             </div>
   
             <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="text" class="form-control" name="email"/>
             </div>
             <div class="form-group">
                 <label for="city">Población:</label>
                 <input type="text" class="form-control" name="city"/>
             </div>
             <div class="form-group">
                 <label for="country">País:</label>
                 <input type="text" class="form-control" name="country"/>
             </div>
             <div class="form-group">
                 <label for="job_title">Ocupación:</label>
                 <input type="text" class="form-control" name="job_title"/>
             </div>    
             <div class="d-flex justify-content-center">                  
              <button type="submit" class="btn btn-primary my-3">Añadir contacto</button>
             </div>
         </form>
     </div>
   </div>
</div>

@endsection