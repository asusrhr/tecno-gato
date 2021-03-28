@extends('layouts.tecno_app')
@section('contenido')
    <div class="row">
        <div class="col s12 m12">
            <div class="card card_color">
                <form action="{{route('admin.tema.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-content">
                        <span class="card-title titulo text_color">Configuración de tema</span>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <select class="icons text_color contenido" name="turno" required>
                                    <option value="1" data-icon="{{asset('images/ico_blanco.png')}}" {{auth()->user()->turno == 1 ? 'selected':''}}>día</option>
                                    <option value="2" data-icon="{{asset('images/ico_negro.png')}}" {{auth()->user()->turno == 2 ? 'selected':''}}>noche</option>
                                </select>
                                <label class="text_color contenido">Seleccione un turno</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select class="icons text_color contenido" name="tema" required>
                                    <option value="1" data-icon="{{asset('images/ico_children.png')}}" {{auth()->user()->tema == 1 ? 'selected':''}}>niño</option>
                                    <option value="2" data-icon="{{asset('images/ico_young.png')}}" {{auth()->user()->tema == 2 ? 'selected':''}}>joven</option>
                                    <option value="3" data-icon="{{asset('images/ico_adult.png')}}" {{auth()->user()->tema == 3 ? 'selected':''}}>adulto</option>
                                </select>
                                <label class="text_color contenido">Seleccione un tema</label>
                            </div>
                        </div>
                        <button class="btn deep-purple darken-3 waves-effect waves-light" type="submit" name="action">Guardar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
