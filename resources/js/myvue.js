import Vue from 'vue';
import axios from 'axios';

var app = new Vue({
    el: '#app',
    data: {
        message: '',
        cars: [] // Array to store the cars
    },
    methods: {
        submitData() {
            console.log('asd');
            // Use this.message to send the registration number entered by the user
            axios.post('/cars/filter', {
                registrationNumber: this.message
            }).then(response => {
                // Update the cars data
                this.cars = response.data.cars.map(car => ({
                    car_id: car.id,
                    car_name: car.car_name

                    // ... other properties
                }));


                console.log('Updated cars array:', this.cars);

                // Optionally, log the response data
                console.log('Response data:', response.data);
            }).catch(error => {
                // Handle errors
                console.error('Error:', error);
            });
        }
    }
});
