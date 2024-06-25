document.addEventListener('DOMContentLoaded', function () {
    fetch('/flights')
        .then(response => response.json())
        .then(data => {
            const flightsContainer = document.getElementById('flights-container');
            data.forEach(flight => {
                const flightCard = document.createElement('div');
                flightCard.className = 'bg-white rounded-lg overflow-hidden shadow-md p-4 mb-4';

                // Contenido del card de vuelo
                flightCard.innerHTML = `
                    <img src="${flight.image_url}" alt="${flight.airline} ${flight.flight_number}" class="w-full h-48 object-cover mb-4">
                    <h2 class="text-lg font-bold">${flight.airline} ${flight.flight_number}</h2>
                    <p class="text-gray-600"><strong>From:</strong> ${flight.from}</p>
                    <p class="text-gray-600"><strong>To:</strong> ${flight.to}</p>
                    <p class="text-gray-600"><strong>Price:</strong> $${flight.price}</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mt-2" onclick="openDateModal('${flight.flight_id}')">Select Date</button>
                `;

                flightsContainer.appendChild(flightCard);
            });
        })
        .catch(error => console.error('Error fetching flight data:', error));
});

function openDateModal(flightId) {
    fetch(`/flights/${flightId}/dates`)
        .then(response => response.json())
        .then(dates => {
            const dateContainer = document.getElementById('dateContainer');
            dateContainer.innerHTML = '';

            dates.forEach(date => {
                const dateOption = document.createElement('div');
                dateOption.className = 'mb-2';
                dateOption.innerHTML = `
                    <input type="radio" name="flight_date" value="${date}" id="date-${date}">
                    <label for="date-${date}">${new Date(date).toLocaleString()}</label>
                `;
                dateContainer.appendChild(dateOption);
            });

            document.getElementById('seatModal').classList.add('modal-active');
        })
        .catch(error => console.error('Error fetching dates:', error));
}

function closeModal() {
    document.getElementById('seatModal').classList.remove('modal-active');
}

function confirmSelection() {
    // Add your logic to handle the selected date confirmation
    closeModal();
}
