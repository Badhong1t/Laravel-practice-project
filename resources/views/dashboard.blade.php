<x-layout title="Dashboard">

    <h1>Dashboard</h1>

    @if (session('status'))

        <p style="background-color: green">{{ session('status') }}</p>
        
    @endif

</x-layout>