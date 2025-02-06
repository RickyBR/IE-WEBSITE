<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center text-gray-700">Login</h2>
        <form method="POST" action="{{ route('login') }}" class="mt-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm p-2" />
                @error('email')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" type="password" name="password" required 
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm p-2" />
                @error('password')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="mt-4 flex items-center">
                <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 border-gray-300 rounded text-indigo-600">
                <label for="remember_me" class="ml-2 text-sm text-gray-700">Remember me</label>
            </div>

            <div class="mt-4 flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:underline">Forgot your password?</a>
                @endif
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow">Log in</button>
            </div>

            
        </form>
    </div>

</body>
</html>