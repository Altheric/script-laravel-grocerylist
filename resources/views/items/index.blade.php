@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <h1>Items</h1>
    <table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Categorie</th>
            <th colspan="2">Acties</th>
        </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>{{ $item->category->name }}</td>
        <td>
            <a href="{{ route('items.edit', $item) }}">Bewerken</a>
        </td>
        <td>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Verwijderen</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection