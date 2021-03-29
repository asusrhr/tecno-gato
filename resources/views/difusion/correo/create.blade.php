@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="card card_color">
                <form action="{{route('difusion.correo.store', [$difusion->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-content">
                        <span class="card-title titulo text_color">Adicionar un correo</span>

                        <div class="row">
                            <div class="col s12 m6">
                                <label>Seleccione un correo</label>
                                <select name="id_correo" required class="browser-default">
                                    <option value="" disabled selected>Escoja uno</option>
                                    @foreach($correos as $correo)
                                        <option value="{{$correo->id}}">{{$correo->correo}}</option>
                                    @endforeach
                                </select>
                                @error('id_correo')
                                <div style="color: red">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit">Guardar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
