<x-layout title="Normal Form">

    <h1>Normal Form</h1>

    <form enctype="multipart/form-data" action="{{ route('form.post') }}" method="POST">

        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
        
        <p style="background-color: red">

            @error('name')

                {{ $message }}
            
            @enderror

        </p>
        

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('email')}}">

        <p style="background-color: red">

            @error('email')

                {{ $message }}
                
            @enderror

        </p>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <p style="background-color: red">

            @error('password')
                
                {{ $message }}

            @enderror

        </p>

        <br>

        <button type="submit">Submit</button>

    </form>

    @if (session('status'))

        <p style="background-color: green">{{ session('status') }}</p>
        
    @endif


</x-layout>
