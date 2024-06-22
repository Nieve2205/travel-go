<section id="acerca">
<footer class="bg-white py-8 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-start">
                <div>
                    <a href="{{ url('/') }}">
                        <img class="h-16 w-auto" src="{{ asset('images/icono5.ico') }}" alt="TravelGo">
                    </a>
                    <p class="mt-2 text-gray-600">Travel ayuda a las empresas a gestionar los pagos fácilmente.</p>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-gray-900"><img src="https://icones.pro/wp-content/uploads/2021/03/icone-linkedin-orange.png" alt="Linkedin" class="w-8 h-8 mx-auto"></a>
                        <a href="#" class="text-gray-600 hover:text-gray-900"><img src="https://icones.pro/wp-content/uploads/2021/05/symbole-messager-orange.png" alt="Messeger" class="w-8 h-8 mx-auto ml-4"></a>
                        <a href="#" class="text-gray-600 hover:text-gray-900 ml-4"><img src="https://icones.pro/wp-content/uploads/2021/02/icone-twitter-orange.png" alt="Twitter" class="w-8 h-8 mx-auto"></a>
                    </div>
                </div>
                <div class="flex space-x-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Compañía</h3>
                        <ul class="mt-2 text-gray-600">
                            <li><a href="#" class="hover:underline">A cerca</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Carreras</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Blog</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Precios</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Destinos</h3>
                        <ul class="mt-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Maldivas</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Los Angeles</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Las Vegas</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Toronto</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Suscríbase a nuestro boletín</h3>
                        <div class="mt-2">
                            <input type="email" placeholder="Tu dirección de correo" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Suscribete</button>
                            <p class="mt-1 text-gray-600 text-sm">* Le enviaremos actualizaciones semanales para su mejor paquete turístico.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-300 pt-4 text-center text-gray-600 text-sm">
                &copy; {{ date('Y') }} TravelGo. Todos los derechos reservados.
            </div>
        </div>
</footer>
</section>