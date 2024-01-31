import Vue from 'vue';
import axios from 'axios';

axios.post('/cars/filter', {
    registrationNumber: 'your_registration_number_here'
}).then(response => {
    // Assuming you have a div with an id of 'cars-list' to display the cars
    let carsList = document.getElementById('cars-list');
    carsList.innerHTML = '';

    response.data.cars.forEach(car => {
        // Append each car to the 'cars-list' div
        // Modify this part according to how you want to display the cars
        let carElement = document.createElement('div');
        carElement.innerHTML = car.registrationNumber; // Or any other car attribute
        carsList.appendChild(carElement);
    });
}).catch(error => {
    console.error('Error:', error);
});
