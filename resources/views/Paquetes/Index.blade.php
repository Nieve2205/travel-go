<x-app-layout>
    <div class="relative h-auto">
        <!-- Contenedor de la imagen -->
        <div class="relative h-auto">
            <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" width="100%" height="100%">

        <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <div class="text-4x1 font-bold" >Buscar tour</div>
                <div class="text-9xl font-bold" style="font-family: 'Carattere'">Viaja con nosotros</div>
            </div>
        </div>

        <!-- Contenedor de cuerpo -->
        <div class="w-2/3 mx-auto mt-[-50px] mb-10 shadow" >
            <!-- Barra de tareas -->
            <div class="flex justify-center h-[80px] w-full">
                <button style="font-family: 'bakbak one'" class="px-4 text-2xl bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 "><i class="fa-solid fa-calendar-days mr-2"></i>Fecha</button>
                <button style="font-family: 'bakbak one'" class="px-4 text-2xl bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 "><i class="fa-solid fa-arrow-up mr-2"></i>Precio Mayor</button>
                <button style="font-family: 'bakbak one'" class="px-4 text-2xl bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 "><i class="fa-solid fa-arrow-down mr-2"></i>Precio Menor</button>
                <button style="font-family: 'bakbak one'" class="px-4 text-2xl bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 "><i class="fa-solid fa-arrow-down mr-2"></i>Nombre (A-Z)</button>
            </div>

        <!--Cuerpo-->
        <div class="flex bg-gray-100 space-x-[20px] w-full">    
            <!--Catalogo de viajes-->
            <div class="flex flex-wrap justify-center ml-[50px] space-x-[10px] w-[60%]">
                @for ($i = 0; $i < 10; $i++)<!--reeplazar esto con un foeach cuando haya la base de datos-->
                <a class="flex flex-col items-center h-[500px] w-[300px]" href="{{route('Paquetes.reserva')}}">
                <div class="flex flex-col items-center h-full w-full mt-5 mb-5 bg-white sm:rounded-[10px] transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-lg">
                    <img src="{{ asset('images/paisajePrueba.jpg') }}" alt="Paisaje de prueba" class="mt-3 w-[90%] h-[50%] object-cover rounded-[10px]">
                    <div class="w-[85%] h-[40%] ml-5">
                        <h1 class="text-4xl font-bold" style="margin-top: 10px;">Suiza</h1>
                        <h2 class="text-sm" style="margin-top: 10px;">Descubre la Belleza Alpina de Suiza Con Impresionantes Paisajes Montañosos y Encantadores Pueblos</h2>
                        <h3 class="text-sm" style="margin-top: 10px;">1,100$</h3>
                        <h3 class="text-sm" style="margin-top: 10px;">★★★★☆</h3>
                    </div>
                </div>
                </a>
                @endfor 
            </div>
            <!--Buscador-->
            <div class="flex flex-wrap justify-center space-x-[10px] w-[40%]">
                <div class="flex flex-col items-center h-[700px] w-[80%] bg-white mt-5">
                    <!-- Aquí es donde irá el buscador -->
                    <div class="w-[95%] p-4 ">
                        <h2 class="text-3xl text-center mt-5 mb-5 font-bold mb-2" style="font-family: 'bakbak one'">Planifica tu viaje</h2>
                        <p class="mb-8 text-center">¡Planifíca tu aventura! Encuentra vuelos, reserva, alojamiento y descubre actividades emocionantes. ¡Haz realidad tus sueños de viajar con nosotros!</p>
                        <form >
                            <input type="text" class="w-full h-20 p-2 border border-gray-300 sm:rounded-lg mb-2" placeholder="Buscar tour">
                            <input type="text" class="w-full h-20 p-2 border border-gray-300 sm:rounded-lg mb-2" placeholder="¿A donde?">
                            <input type="date" class="w-full h-20 p-2 border border-gray-300 sm:rounded-lg mb-2">
                        <div class="relative mt-2">
                            <label for="priceRange" class="text-2xl font-bold">Filtrar Precio</label>
                            <input type="range" min="12" max="3600" id="priceRange" class="slider w-full p-2 border border-gray-300 rounded mt-5 mb-2" oninput="updatePriceValue(this.value)">
                            <span class="absolute top-4 right-0 mt-15 text-sm" id="priceValue">Precio: $12 - $3600</span>
                        </div>
                            <script> 
                            function updatePriceValue(val) {
                                document.getElementById('priceValue').textContent = 'Precio: $' + val;
                            }
                            </script>

                            <div class="flex items-center justify-center mt-10 h-full">
                                <button class="w-[50%] h-[50px] p-2 bg-orange-500  hover:bg-gray-500 text-white sm:rounded-[10px]" style="font-family: 'bakbak one'">Reservar ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>