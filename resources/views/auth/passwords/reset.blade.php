@extends('layout.app')

@section('content')
    <div class="flex flex-col h-screen bg-gray-100">
        <!-- Auth Card Container -->
        <div class="grid place-items-center mx-2 my-20">
            <!-- Auth Card -->
            <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
                                                    px-6 py-10 sm:px-10 sm:py-6 
                                                    bg-white rounded-lg shadow-md lg:shadow-lg">

                <!-- Card Title -->
                <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                    Resetear Contraseña
                </h2>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        placeholder="Dirección de correo" class="block w-full py-3 px-1 mt-2 
                                                            text-gray-800 appearance-none 
                                                            border-b-2 border-gray-100
                                                            focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        required />

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!-- Password Input -->
                    <label for="password"
                        class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Contraseña</label>
                    <input id="password" type="password" name="password" placeholder="Contraseña" class="block w-full py-3 px-1 mt-2 mb-4
                                                            text-gray-800 appearance-none 
                                                            border-b-2 border-gray-100
                                                            focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        required />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password"
                        class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Contraseña</label>
                    <input id="password-confirm" type="password" name="password_confirmation" placeholder="Contraseña" class="block w-full py-3 px-1 mt-2 mb-4
                                                        text-gray-800 appearance-none 
                                                        border-b-2 border-gray-100
                                                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        required />

                    <!-- Auth Buttton -->
                    <button type="submit" class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                                                            font-medium text-white uppercase
                                                            focus:outline-none hover:bg-gray-700 hover:shadow-none">
                        Resetear Contraseña
                    </button>

                </form>
            </div>
        </div>
    </div>
@endsection
