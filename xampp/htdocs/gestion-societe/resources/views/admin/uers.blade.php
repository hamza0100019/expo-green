<!-- filepath: /c:/xampp/htdocs/gestion-societe/resources/views/admin/users.blade.php -->
@extends('layouts.app')

@section('title', 'Gestion des Utilisateurs')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Gestion des Utilisateurs</h1>
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
            @foreach ($users as $user)
            <tr class="border-b">
                <td class="p-4">{{ $user->name }}</td>
                <td class="p-4">{{ $user->email }}</td>
                <td class="p-4">{{ $user->role }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500 hover:underline">Modifier</a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection