<template>
    <h3>{{ post.title }}</h3>
    <p>{{ post.body }}</p>
</template>

<script setup>
    import { defineProps } from 'vue';
    defineProps({
        post:Object
    });
</script>