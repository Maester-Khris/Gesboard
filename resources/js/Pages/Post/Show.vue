<template>
     <Head>
      <title>Dashboard Post Detail</title>
    </Head>
    <div class="jumbotron">
        <h1 class="display-4 text-center">Hello Guys, this is the Home of my dashboard!</h1>
        <a class="btn btn-primary btn-lg" href="/posts" role="button" style="margin-top: 15px;">Get to list of posts</a>
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active"><a>Posts Detail</a></li>
    </ol>
    </nav>

    <span class="badge badge-info d-inline-block" style="padding:5px 15px; margin-bottom: 10px;">Title:</span> {{ post.title }} <br>
    <span class="badge badge-info d-inline-block" style="padding:5px 15px; margin-bottom: 10px;">Description:</span> {{ post.body }}
        
</template>

<script setup>
    import { defineProps } from 'vue';
    import { Head } from '@inertiajs/vue3';
    defineProps({
        post:Object
    });
</script>