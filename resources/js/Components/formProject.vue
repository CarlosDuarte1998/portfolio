<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { RouterLink } from 'vue-router';


const form = reactive({
    name: '',
});

const submitForm = () => {
    router.post('/v2/tags', form)
};
</script>

<template>
    <div >
        <form @submit.prevent="submitForm"  method="post">
            <input type="text" v-model="form.name">
            <input type="submit">
        </form>
        <RouterLink to="/vue/prueba">Ir</RouterLink>
    </div>
</template>
<style scoped>
    input {
        display: block;
        margin: 10px;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
    }
    input[type="submit"] {
        margin-top: 20px;
    }
</style>import { RouterLink } from 'vue-router';
