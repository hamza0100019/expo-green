@extends('layouts.app')

@section('title', 'Liste des Employés')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Liste des Employés</h1>
    <a href="{{ route('employees.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter</a>
</div>
<table class="w-full bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-4 text-left">Nom</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-left">Rôle</th>
            <th class="p-4 text-left">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr class="border-b">
            <td class="p-4">{{ $employee->name }}</td>
            <td class="p-4">{{ $employee->email }}</td>
            <td class="p-4">{{ $employee->role }}</td>
            <td class="p-4">
                <a href="{{ route('employees.edit', $employee->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
