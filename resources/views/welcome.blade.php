<x-app-layout>
    @push('styles')
        <style>
            .fixed-grid {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 1.5rem; /* Ajuste el espacio entre columnas si es necesario */
            }
            .cover-image {
                width: 100%;
                height: 200px; /* Ajusta esta altura según tus necesidades */
                object-fit: cover;
            }
        </style>
    @endpush
    <section id="principal">
    <div class="relative h-screen">
        <!-- Contenedor del video -->
        <div class="relative w-full h-full">
            <video muted autoplay width="100%" height="100%" class="object-cover" controls>
                <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 z-5 ">No importa a dónde vayas, te llevaremos allí.</h1>
                <form action="" method="POST">
                    <div class="bg-white bg-opacity-40 rounded-lg p-6 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 z-10">
                        <input type="text" placeholder="¿A dónde?" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <select class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                            <option>Tipo de viaje</option>
                            <option>Vacaciones</option>
                            <option>Negocios</option>
                            <option>Aventura</option>
                        </select>
                        <input type="text" placeholder="Duración" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto">Buscar</button>
                    </div>
                </form>
                <!-- Información adicional debajo del formulario -->
                <div class="flex justify-center items-center mt-4">
                    <span span class="bg-black bg-opacity-50 py-2 px-4 rounded-lg pointer-events-auto">2,350 personas reservaron el evento formacional en las últimas 24 horas</span>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!-- Sección de Servicios -->
    <section id="servicios" class="mt-12">
    <div class="container mx-auto py-12">
        <h5 class="font-bold text-center text-red-600 ">CATEGORIA</h5>
        <h2 class="text-3xl font-bold text-center mb-8">NUESTROS SERVICIOS</h2>

        <div class="fixed-grid">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-center items-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/3284/3284622.png" alt="Visita Guiada" class="w-16 h-16 mr-4">
                </div>
                <h3 class="text-xl text-center font-bold">Visitas guiadas</h3>
                <p class="text-center text-gray-600">Contamos con una amplia selección de recorridos diseñados para brindarte una experiencia única y auténtica.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-center items-center mb-4">
                    <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-airplane-vector-icon-png-image_3757854.jpg" alt="Vuelos" class="w-16 h-16 mr-4">
                </div>
                <h3 class="text-xl text-center font-bold">Las mejores opciones de vuelos</h3>
                <p class="text-center text-gray-600">Trabajamos con las principales aerolíneas y agencias de viajes para garantizarte una experiencia de vuelo cómoda.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-center items-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/5778/5778339.png" alt="Tours Religiosos" class="w-16 h-16 mr-4">
                </div>
                <h3 class="text-xl text-center font-bold">Tours Religiosos</h3>
                <p class="text-center text-gray-600">Si estás buscando una experiencia espiritual y cultural, nuestros tours religiosos son ideales para ti.</p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-center items-center mb-4">
                    <img src="https://cdn-icons-png.freepik.com/512/4807/4807695.png" alt="Seguro Médico" class="w-16 h-16 mr-4">
                </div>
                <h3 class="text-xl text-center font-bold">Seguro médico</h3>
                <p class="text-center text-gray-600">La seguridad y el bienestar de nuestros viajeros son nuestra máxima prioridad. Por eso, te recomendamos contar con un seguro médico para tu viaje.</p>
            </div>
        </div>
    </div>
    </section>

    <!-- Sección frase llamativa -->
    <section  class="mt-12">
        <div class="relative bg-gray-100 py-12">
            <div class="container mx-auto px-4">
                <img src="https://timelinecovers.pro/facebook-cover/download/Paisajes-facebook-cover.jpg" class="cover-image" alt="Fondo de portada">
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-3xl font-bold text-center mb-8 text-white sans-serif'">Hagamos tus próximas vacaciones increíbles</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección paquetes de moda -->
    <section class="mt-12">
    <div class="container mx-auto px-4 py-8">
        <h5 class="font-bold text-center text-red-600">DE MODA</h5>
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nuestros paquetes turísticos de moda</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://prd-webrepository.firabarcelona.com/wp-content/uploads/sites/69/2023/06/19102025/como_descubrir-suiza-tren-istock-584784714.jpeg" alt="Suiza" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/ch.png" alt="Switzerland Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Suiza</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">25 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Europa</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,000 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">Suiza, el paraíso originario. Con sus impresionantes paisajes montañosos, lagos cristalinos y encantadores pueblos, te cautiva un destino que te deja sin aliento, nuttura de la esencia de la naturaleza en lo alto de sus alpes y disfrute maravillarte por las bellezas de Zurich, Ginebra y Lucerne. </p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://img.freepik.com/fotos-premium/tucan-parque-nacional-iguazu-brasil_251764-43.jpg" alt="Amazonas" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/br.png" alt="Brazil Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Amazonas</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">30 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Brasil</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,223 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">El Amazonas, un tesoro natural. Sumérgete en la selva más grande del mundo y descubre su biodiversidad único. Explora los ríos serpenteantes, maravilla con la exuberante vegetación y admira la fauna endémica, una experiencia inolvidable para los amantes de la naturaleza y lo aventura.</p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1506710507565-203b9f24669b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Guiza" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/eg.png" alt="Egypt Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Guiza</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">155 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Egipto</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,150 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">Guiza, donde la historia cobra vida. Visita los majestuosos Pirámides de Giza y la Gran Esfinge, este antiguo enclave te transportará a la era de los faraones. Descubre las maravillas arquitectónicas del Antiguo Egipto y descubre los secretos de una de las civilizaciones más fascinantes de la historia.</p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center mb-8">
        <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto">Explorar más tours</button>
        </div>
    </div>
    </section>
    
    <!-- Sección de testimonios -->
    <section class="py-12">
        <div class="container mx-auto py-20 px-4 text-center">
            <h2 class="text-red-500 uppercase tracking-wide font-semibold mb-2">Promoción</h2>
            <h3 class="text-3xl font-bold text-gray-800 mb-8">Vea lo que nuestros clientes dicen sobre nosotros</h3>
            <div class="relative bg-white py-24 px-8 rounded-lg shadow-lg max-w-3xl mx-auto min-h-80">
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
                    <button class="bg-gray-200 text-gray-600 hover:bg-gray-300 p-2 rounded-full focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2">
                    <button class="bg-gray-200 text-gray-600 hover:bg-gray-300 p-2 rounded-full focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="mb-4 py-8">
                    <img src="https://cdn-icons-png.freepik.com/256/14083/14083134.png?semt=ais_hybrid" alt="Cliente" class="w-16 h-16 mx-auto rounded-full border-4 border-white shadow-lg">
                </div>
                <blockquote class="text-gray-600 italic mb-4 px-8">"Lo que realmente me gusta de esta página es la amplia variedad de destinos y opciones de alojamiento que ofrece. Siempre encuentro excelentes ofertas y promociones que se adaptan a mi presupuesto y preferencias."</blockquote>
                <p class="font-semibold text-gray-800 py-8">Christine Beckers - Diseñadora</p>
                
            </div>
        </div>
    </section>
</x-app-layout>