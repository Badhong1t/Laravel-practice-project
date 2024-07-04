<x-layout title="Login Form">

    <h1>Login Page</h1>

    <form enctype="multipart/form-data" action="{{ route('form.login') }}" method="POST">
    
        @csrf

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('email')}}">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Submit</button>
    
    </form>

    @if ($errors->has('status'))

        <p style="background-color: red"> {{ $errors->first('status') }} </p>
        
    @endif

</x-layout>