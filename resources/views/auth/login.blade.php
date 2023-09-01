<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>De Villa-Birung Clinic</title>
    <!-- other meta tags, stylesheets, and scripts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>

<x-guest-layout>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <x-jet-authentication-card>
        <div class="logo" name = "logo">
            <img src="../doctorimage/birung_logo.jpg"  alt="" style="width:400px; height:350px; border-radius:50%;">
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
            <div style="position: relative;">
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" maxAttempts="3"/>
                <span onclick="showPw()" style="position: absolute; right :5%; bottom:20%; cursor:pointer;font-size:25px" class="fa fa-eye" id="show_eye"></span>
                <span onclick="showPw()" style="position: absolute;display:none; right :5%; bottom:20%; cursor:pointer;font-size:25px" class="fa fa-eye-slash" id="hide_eye"></span>
            </div>  
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
        
        <script>
            function showPw(){
                const show_eye = document.getElementById("show_eye");
                const hide_eye = document.getElementById("hide_eye");
                let input = document.getElementById("password");
                if(input.type == "password"){
                    input.type = "text";
                    show_eye.style.display = "none";
                    hide_eye.style.display = "block";
                }
                else{
                    input.type = "password";
                    show_eye.style.display = "block";
                    hide_eye.style.display = "none"; 
                }
            }
        </script>
        
    </x-jet-authentication-card>
</x-guest-layout>
