<template>
<Head>
    <title> Dashboard </title>
    <meta type="description" content="Information about my  app"  head-key="description">
</Head>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <h1 class="font-bold text-lg">Welcome {{ username }} </h1>
            <input type="text" value="My App">
            <Nave/>
        </header>
    </section>

    <section class="p-6">
        <div class="max-w-3xl max-auto">
            <slot/>
        </div>
    </section>

    <section>
        <div class="max-w-3xl max-auto">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TUc-NuFDq0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
</template>
<script>

import {Link} from '@inertiajs/inertia-vue3'
import {Head} from "@inertiajs/inertia-vue3";
import Nave from "./Nave";
export default {
    components: {
        Nave ,Head
    },
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }
};

</script>
