<template>
   <Head>
      <title>Dashboard Post</title>
    </Head>

    <div class="jumbotron">
        <h1 class="display-4 text-center">Hello Guys, this is the Home of my dashboard!</h1>
        <a class="btn btn-primary btn-lg" href="/posts" role="button" style="margin-top: 15px;">Get to list of posts</a>
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active"><a>Posts List</a></li>
    </ol>
    </nav>

  <h1 class="display-4" style="margin-bottom: 20px;">Posts list</h1>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th v-for="header in headers" :key="header">
          {{ header }}
        </th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
        <tr v-for="post in posts" :key="post.id">
          <td>{{ post.title }}</td>
          <td>{{ post.body }}</td>
          <td> <Link :href="`posts/${post.id}/description`">Read more ...</Link></td>
        </tr>
      </tbody>
  </table>
  <Link class="btn btn-primary btn-lg" href="posts/create" role="button" style="margin-top: 15px;">Create new Post</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { Head } from '@inertiajs/vue3';
defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
});

const headers = ["posts", "body"];
</script>