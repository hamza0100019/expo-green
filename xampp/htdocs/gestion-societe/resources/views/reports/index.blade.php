@extends('layouts.app')

@section('title', 'Rapports')

@section('module-title', 'Rapports')

@section('content')
<div class="flex flex-col space-y-4">
    <h1 class="text-2xl font-bold">Rapports</h1>
    <ul class="list-disc pl-5">
        @foreach ($reports as $report)
            <li>
                <a href="{{ $report['link'] }}" class="text-blue-500 hover:underline">{{ $report['name'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
