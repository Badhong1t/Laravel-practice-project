<x-layout title="Settings">

    <h1>Settings</h1>

    <form action="/settings" method="POST">
    
        @csrf
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$settings->name}}">

        <br><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{$settings->email}}">

        <br><br>

        <button type="submit">Save Settings</button>

    </form>



</x-layout>
