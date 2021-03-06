@extends('layouts.app')

@section('content')
<div class="container">
  <a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Crea un nuovo post</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Slug</th>
      <th scope="col">Data pubblicazione</th>
      <th scope="col">Data creazione</th>
      <th scope="col">Data pubblicazione</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->title }}</td>
      <td>{{ $value->slug }}</td>
      <td>{{ $value->publisheder_at }}</td>
      <td>{{ $value->created_at }}</td>
      <td>
        <a class="btn btn-success" href="{{ route('admin.posts.edit', $value) }}">Modifica</a>
      </td>
      <td>
        <form action="{{ route('admin.posts.destroy', $value) }}" method="POST">
          @csrf
          @method('DELETE')

          <button class="btn btn-danger">Elimina</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection