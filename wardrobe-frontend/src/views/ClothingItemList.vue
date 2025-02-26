<template>
    <div>
      <h1>Clothing Items</h1>
      <ul>
        <li v-for="item in clothingItems" :key="item.id">
          {{ item.name }} - {{ item.category }}
          <button @click="viewItem(item.id)">View</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import { useRouter } from 'vue-router';
  import api from '../api';
  
  export default {
    setup() {
      const router = useRouter();
      const clothingItems = ref([]);
  
      const fetchClothingItems = async () => {
        try {
          const response = await api.get('/clothing-items');
          clothingItems.value = response.data;
        } catch (error) {
          console.error('Error fetching clothing items:', error);
        }
      };
  
      const viewItem = (id) => {
        router.push(`/clothing-items/${id}`);
      };
  
      onMounted(fetchClothingItems);
  
      return { clothingItems, viewItem };
    },
  };
  </script>