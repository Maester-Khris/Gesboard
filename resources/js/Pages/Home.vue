<template>
    <Head>
        <title>Dashboard Home</title>
    </Head>

    <div class="jumbotron">
        <h1 class="display-4 text-center">Hello Guys, this is the Home of my dashboard!</h1>
        <a class="btn btn-primary btn-lg" href="/posts" role="button" style="margin-top: 15px;">Get to list of posts</a>
    </div>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Home</a></li>
    </ol>
    </nav>

    <div style="margin-top: 30px;">
        <h1 class="display-4" style="margin-bottom: 20px;">New items added to the list </h1>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</template>

<script setup>
    import { Head } from '@inertiajs/vue3';
</script>