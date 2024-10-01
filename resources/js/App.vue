<template>
    <div>
        <h1>Hello from Vue in Laravel!</h1>
    </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import { onMounted } from 'vue';

onMounted(() => {
    axios.get('/api/hello').then((response) => {
        console.log(response.data);
    })
});
</script>
