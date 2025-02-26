<template>
    <div>
      <h1>Tags</h1>
      <ul>
        <li v-for="tag in tags" :key="tag.id">
          {{ tag.name }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import api from '../api';
  
  export default {
    setup() {
      const tags = ref([]);
  
      const fetchTags = async () => {
        try {
          const response = await api.get('/tags');
          tags.value = response.data;
        } catch (error) {
          console.error('Error fetching tags:', error);
        }
      };
  
      onMounted(fetchTags);
  
      return { tags };
    },
  };
  </script>