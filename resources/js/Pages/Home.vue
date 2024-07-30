<script setup>
import formProjectVue from '@/Components/formProject.vue';
import { Link, Head } from '@inertiajs/vue3'
import sideMenuVue from '@/Components/side-menu.vue';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { RouterLink } from 'vue-router';




</script>
<template>
    <Head title="Users" />
    <div class=" ">
        <sideMenuVue>
            <Link  :href="route('route.name')" :active="route().current('route.name')">Ir</Link>
        </sideMenuVue>

    </div>
</template>
