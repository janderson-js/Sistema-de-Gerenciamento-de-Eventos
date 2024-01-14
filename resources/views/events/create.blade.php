@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cria o evento</h1>
    <form action="/events" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" id="image" class="form-control-file" name="image" placeholder="Insera uma imagem">
        </div>
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" id="title" class="form-control" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" id="date" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" id="city" class="form-control" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
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
        <input type="submit" class="btn btn-primary" id="btn-primary" value="Criar Evento">
    </form>
</div>

@endsection