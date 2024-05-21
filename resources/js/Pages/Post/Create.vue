<template>
   <Head>
      <title>Dashboard New Post</title>
    </Head>

  <div class="jumbotron">
    <h1 class="display-4 text-center">Hello Guys, this is the Home of my dashboard!</h1>
    <a class="btn btn-primary btn-lg" href="/posts" role="button" style="margin-top: 15px;">Get to list of posts</a>
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active"><a>New Post</a></li>
    </ol>
    </nav>

  <form @submit.prevent="submit">
    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/6">
      <label class="block text-gray-500 font-bold md:text-center mb-1 md:mb-0 pr-4" for="inline-title">
        Post title
      </label>
    </div>
    <div class="md:w-5/6">
      <input v-model="form.title" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-title" type="text" placeholder="What's up buddy !">
    </div>
  </div>
    <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/6">
      <label class="block text-gray-500 font-bold md:text-center mb-1 md:mb-0 pr-4" for="inline-description">
        Post Description
      </label>
    </div>
    <div class="md:w-5/6">
      <input  v-model="form.body" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-description" type="text" placeholder="Been That way,">
    </div>
  </div>
  <div class="md:flex md:items-center">
    <div class="md:w-1/6"></div>
    <div class="md:w-5/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign Up
      </button>
    </div>
  </div>
  </form>
</template>

<script setup>
  import { useForm } from "@inertiajs/vue3";
  import { Head } from '@inertiajs/vue3';
  const form = useForm({
    title: "",
    body: "",
  });
  const submit = () => {
    form.post("/posts");
  };
</script>
<style lang="scss" scoped></style>