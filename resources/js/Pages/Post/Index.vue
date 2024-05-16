<template>
  <div>
  <h1>My Inrertia CRUD</h1>
  <table>
    <thead>
      <tr>
        <th v-for="header in headers" :key="header">
          {{ header }}
        </th>
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
  </div>
  <Link href="posts/create">Create new Post</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
});

const headers = ["posts", "body"];
</script>