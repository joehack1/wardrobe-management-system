import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('auth', {
    state: () => ({
        user: null,
        token: localStorage.getItem('token') || null,
    }),
    actions: {
        async login(credentials) {
            const response = await axios.post('/api/login', credentials);
            this.token = response.data.token;
            localStorage.setItem('token', this.token);
        },
        async register(userData) {
            await axios.post('/api/register', userData);
        },
        logout() {
            this.token = null;
            localStorage.removeItem('token');
        },
    },
});