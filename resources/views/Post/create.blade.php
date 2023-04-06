@extends('layout.layouts')

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush


@section('contenido')
<div class="row">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        <h4 class="mb-3">imagen aqui</h4>
        <!-- Example of a form that Dropzone can take over -->
        <form  action="{{route ('imagenes')}}" enctype="multipart/form-data"
        id="dropzone" class="dropzone rounded border border-1 w-100 h-100 items-center 
        d-flex aling-items-cente justify-content-center">
        @csrf
        </form>
    </div> 
    <div class="col-7 p-5 text-center m-2 rounded-2 border">
        <h2 class="mb-3">Crea tu nuevo post</h2>
        <form action="{{ route('post.store') }}" method="POST" novalidate>
            @csrf
        <div class="form-outline m-3">
            <input type="text" id="typeText" class="form-control" name="titulo" />
            <label class="form-label" for="typeText">Titulo</label>
          </div>
        <div class="form-outline m-3">
            <textarea class="form-control" name="descripcion" id="textAreaExample" rows="4"></textarea>
            <label class="form-label" for="textAreaExample">Mensaje</label>
        </div>
        <div>
            <input name="imagen" id="imagen" type="hidden" value= "/"/>
       </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Crear publicacion</button>
</form>
    </div>
</div>
@endsection