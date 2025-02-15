<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>

<div class="container justify-between flex-col items-center flex">
    <h1 class="font-bold text-3xl mt-5">Login Form</h1>

    <form  method="POST" action="{{ route('login') }}" class="flex items-center flex-wrap flex-col bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div>
            <label class="block text-gray-600 text-lg mt-4  font-bold mb-2" for="email">Email</label>
            <input class="p-4 shadow appearance-none rounded w-80 py-2 px-3 text-gray-700 p-5 @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" required autocomplete="email" type="text" placeholder="Login With Phone or Email">
            @error('email')
            <span class="invalid-feedback text-red-700" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div>
            <label class="block text-gray-600 text-lg mt-4  font-bold mb-2 mt-4">Password</label>
            <input class="p-4 shadow appearance-none rounded w-80 py-2 px-3 text-gray-700 p-5 @error('password') is-invalid @enderror" name="password" required autocomplete="password" type="text" placeholder="Enter Your Password">
            @error('password')
            <span class="invalid-feedback text-red-700" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="mt-4 bg-yellow-500 hover:bg-yellow-400  text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            <input type="submit" value="login">
        </div>
    </form>
</div>
</body>
</html>
