<template>
    <div>
      <h1>{{ isEdit ? 'Edit Clothing Item' : 'Add Clothing Item' }}</h1>
      <form @submit.prevent="submitForm">
        <input v-model="name" type="text" placeholder="Name" required />
        <select v-model="category" required>
          <option value="tops">Tops</option>
          <option value="bottoms">Bottoms</option>
          <option value="shoes">Shoes</option>
          <option value="accessories">Accessories</option>
        </select>
        <textarea v-model="description" placeholder="Description"></textarea>
        <input v-model="imageUrl" type="url" placeholder="Image URL" />
        <button type="submit">{{ isEdit ? 'Update' : 'Add' }}</button>
      </form>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import { useRouter, useRoute } from 'vue-router';
  import api from '../api';
  
  export default {
    setup() {
      const router = useRouter();
      const route = useRoute();
      const isEdit = ref(false);
      const name = ref('');
      const category = ref('tops');
      const description = ref('');
      const imageUrl = ref('');
  
      const submitForm = async () => {
        const itemData = {
          name: name.value,
          category: category.value,
          description: description.value,
          image_url: imageUrl.value,
        };
  
        try {
          if (isEdit.value) {
            await api.put(`/clothing-items/${route.params.id}`, itemData);
          } else {
            await api.post('/clothing-items', itemData);
          }
          router.push('/clothing-items');
        } catch (error) {
          console.error('Error saving clothing item:', error);
        }
      };
  
      onMounted(async () => {
        if (route.params.id) {
          isEdit.value = true;
          const response = await api.get(`/clothing-items/${route.params.id}`);
          const item = response.data;
          name.value = item.name;
          category.value = item.category;
          description.value = item.description;
          imageUrl.value = item.image_url;
        }
      });
  
      return { isEdit, name, category, description, imageUrl, submitForm };
    },
  };
  </script>