    <div x-data="{ añadir: false }">
        <button
            class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
            @click="añadir = true">Añadir Usuario</button>

        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
            style="background-color: rgba(0,0,0,.5);" x-show="añadir">

            <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
                @click.away="añadir = false">
                <div class="text-center sm:mt-0 sm:text-left mb-3">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Añadir Usuario
                    </h3>
                </div>

                <input
                    class="text-sm input border border-gray-400 appearance-none rounded w-full px-3 py-3 pb-2 focus focus:outline-none active:outline-none active:border-indigo-600 mb-3"
                    wire:model="name" type="text" autofocus placeholder="Nombre de usuario" required>

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
                <input
                    class="text-sm input border border-gray-400 appearance-none rounded w-full px-3 py-3 pb-2 focus focus:outline-none active:outline-none active:border-indigo-600 mb-3"
                    wire:model="email" type="email" placeholder="Dirección de correo" required>

                @error('email')
                    <span>{{ $message }}</span>
                @enderror

                <input
                    class="text-sm input border border-gray-400 appearance-none rounded w-full px-3 py-3 pb-2 focus focus:outline-none active:outline-none active:border-indigo-600"
                    wire:model="password" type="password" placeholder="Contraseña" required>

                @error('password')
                    <span>{{ $message }}</span>
                @enderror

                <div class="mt-4 sm:mt-5">
                    <span class="flex w-full rounded-md shadow-sm">
                        <button wire:click="add"
                            class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700 mr-2">
                            Añadir
                        </button>
                        <button @click="añadir = false"
                            class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                            Cerrar
                        </button>
                    </span>
                </div>

            </div>
        </div>
    </div>
