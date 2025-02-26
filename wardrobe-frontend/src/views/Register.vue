<template>
    <div>
      <h1>Register</h1>
      <form @submit.prevent="register">
        <input v-model="name" type="text" placeholder="Name" required />
        <input v-model="email" type="email" placeholder="Email" required />
        <input v-model="password" type="password" placeholder="Password" required />
        <button type="submit">Register</button>
      </form>
      <p v-if="error" class="error">{{ error }}</p>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  import { useAuthStore } from '../stores/auth';
  import { useRouter } from 'vue-router';
  
  export default {
    setup() {
      const authStore = useAuthStore();
      const router = useRouter();
      const name = ref('');
      const email = ref('');
      const password = ref('');
      const error = ref('');
  
      const register = async () => {
        try {
          await authStore.register({
            name: name.value,
            email: email.value,
            password: password.value,
          });
          router.push('/login'); // Redirect to login page after registration
        } catch (err) {
          error.value = 'Registration failed. Please try again.';
        }
      };
  
      return { name, email, password, error, register };
    },
  };
  </script>
  
  <style scoped>
  .error {
    color: red;
  }
  </style>