@extends('layouts.main')
@section('title', 'Editar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" id="image" class="form-control-file" name="image" placeholder="Insera uma imagem">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" id="date" class="form-control" name="date" value="{{ date('Y-m-d', strtotime($event->date)) }}">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control" value="{{$event->private}}">
                <option value="0" {{ $event->private == '0' ? 'selected' : ''}} >Não</option>
                <option value="1" {{ $event->private == '1' ? 'selected' : ''}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="itens">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" id="items" name="items[]"  value="Cadeiras"> Cadeira
            </div>
            <div class="form-group">
                <input type="checkbox" id="items" name="items[]"  value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" id="items" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" id="btn-primary" value="Editar Evento">
    </form>
</div>

@endsection