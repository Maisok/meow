<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#2c264d] min-h-screen flex flex-col items-center justify-center">
  <div class="w-full max-w-sm mx-auto px-6">
    <h1 class="text-center text-3xl font-bold text-white mb-8">Вход</h1>
    <form method="POST" action="{{ route('login') }}"class="space-y-4" >
        @csrf
      <div class="relative">
        <input type="text" placeholder="Элекронная почта" id="email" name="email" type="email"
               class="w-full px-4 py-3 bg-transparent border-2 border-white/50 text-white placeholder-white rounded-[20px_0_20px_0] focus:outline-none focus:border-purple-400">
      </div>
      

      <div class="relative">
        <input type="password" placeholder="Пароль" id="password" type="password" name="password"
               class="w-full px-4 py-3 bg-transparent border-2 border-white/50 text-white placeholder-white rounded-[20px_0_20px_0] focus:outline-none focus:border-purple-400">
      </div>


      <button type="submit"
              class="w-full py-3 bg-black text-purple-300 font-bold text-lg rounded-[20px_0_20px_0] hover:bg-purple-800 hover:text-white transition">
        ВОЙТИ
      </button>
    </form>

    <!-- Ссылка "Забыли пароль?" -->
    <p class="mt-4 text-center text-white/70 text-sm hover:text-purple-400 cursor-pointer">
      <a href="">Забыли пароль?</a>
      
    </p>
    <p class="mt-4 text-center text-white/70 text-sm hover:text-purple-400 cursor-pointer">
      <a href="{{route('register')}}">Нет аккаунта?</a>
    </p>

    <!-- Логотип -->
    <div class="mt-10 flex justify-center">
      <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Logo" class="w-20 h-20"></a>
    </div>
  </div>
</body>
</html>