import Vue from 'vue';
import axios from 'axios';

var app = new Vue({
    el: '#app',
    data: {
        message: ''
    },
    methods: {
        submitData() {
            axios.post('/submit', { registrationNumber: this.message })
                .then(response => {
                    console.log(response.data);
                    // Handle your response here
                })
                .catch(error => {
                    console.error(error);
                    // Handle your error here
                });
        }
    }
});
