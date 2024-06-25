<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            display: none;
        }
        .modal-active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Available Flights</h1>
        <div id="flights-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4"></div>
    </div>

    <!-- Modal -->
    <div id="seatModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center modal">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
            <div class="px-4 py-2 bg-gray-200 flex justify-between items-center">
                <h3 class="text-lg font-medium" id="modalTitle">Select a Departure Date</h3>
                <button class="text-gray-700" onclick="closeModal()">×</button>
            </div>
            <div class="p-4" id="dateContainer">
                <!-- Date selection will be dynamically loaded here -->
            </div>
            <div class="px-4 py-3 bg-gray-200 text-right">
                <button class="bg-blue-500 text-white px-4 py-2 rounded" onclick="confirmSelection()">Confirm</button>
                <button class="bg-gray-500 text-white px-4 py-2 rounded" onclick="closeModal()">Cancel</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/flights.js') }}"></script>
</body>
</html>
