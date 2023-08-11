<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
        posts: Array
})
</script>

<template>
    <Head title="Posts" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
                <div v-for="post in posts" :key="post.id">

                        <div class="font-samiboald">{{ post.user.name }}</div>
                        <div class="font-samiboald">{{ post.body }}</div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-10">
                <div v-for="post in posts" :key="post.id">

                        <div class="font-samiboald">{{ post.user.name }}</div>
                        <div class="font-samiboald">{{ post.body }}</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
