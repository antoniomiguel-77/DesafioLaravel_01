@extends('layouts.app')
@section('title','Tarefas')
@section('content')

<div class="">
    <div class="text-end">
        <a href="{{route('task.create')}}"  class="btn btn-primary">Adicionar</a>
    </div>
    <div class="table-responsive">
    <table class="table table-striped text-center">
        <thead>
            <tr>
            <th scope="col">Utilizador</th>
            <th scope="col">Tarefa</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($tasks) and $tasks->count() > 0)
            @foreach ($tasks as $item)
            <tr>
            <td>{{$item->user->name}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->status}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Excluir</button>
                  </div>
            </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="4">Nenhuma Tarefa Disponivel</td>
            </tr>
            @endif
    
        </tbody>
        </table>
    </div>
</div>

@endsection
