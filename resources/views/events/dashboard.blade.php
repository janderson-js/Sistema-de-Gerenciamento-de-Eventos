@extends('layouts.main')
@section('title', 'DashBoard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">

    <h1>Meus Eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)

        <table class="table" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td scope="row"> {{$loop->index + 1}} </td>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td class="dashboard-acao">
                            <a href="/events/edit/{{$event->id}}" class="btn btn-info edit-btn" title="Editar evento">
                                <ion-icon name="create-outline"></ion-icon>Editar
                            </a>
                            <form action="/events/{{$event->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger danger-btn"  title="Deletar evento">
                                    <ion-icon name="trash-outline"></ion-icon>Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>Você ainda não tem eventos, <a href="/events/create">Criar evento</a> </p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">

    <h1>Eventos que estou participando</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($eventsasparticipant) > 0)

    <table class="table" style="text-align:center;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventsasparticipant as $event)
                    <tr>
                        <td scope="row"> {{$loop->index + 1}} </td>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td class="dashboard-acao">
                           <form action="/events/leave/{{$event->id}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger delete-btn" >
                                    <ion-icon name="trash-outline"></ion-icon>
                                    Sair do Evento
                                </button>
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <p>Você não está participando de nenhum evento, <a href="/">veja todos os eventos</a></p>
    @endif
</div>
@endsection