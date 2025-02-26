<template>
    <div>
      <h1>Login</h1>
      <form @submit.prevent="login">
        <input v-model="email" type="email" placeholder="Email" required />
        <input v-model="password" type="password" placeholder="Password" required />
        <button type="submit">Login</button>
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
      const email = ref('');
      const password = ref('');
      const error = ref('');
  
      const login = async () => {
        try {
          await authStore.login({
            email: email.value,
            password: password.value,
          });
          router.push('/'); // Redirect to home page after login
        } catch (err) {
          error.value = 'Invalid email or password';
        }
      };
  
      return { email, password, error, login };
    },
  };
  </script>
  
  <style scoped>
  .error {
    color: red;
  }
  </style>