<template>

    <Head title="Create User"/>

    <h1 class="text-3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">

        <div class="mb-6">
            <label class="block mb-2 uppercase front-bold text-xs text-gray-700" for="name"> Name
            </label>

            <input v-model="form.name" class="border border-gray-400 p-2 w-full" type="text" name="name" id="name"
            >
            <div class="text-red-500 text-gray-700" v-if="errors.name" v-text="errors.name"></div>

        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase front-bold text-xs text-gray-700" for="email"> Name
            </label>

            <input v-model="form.email" class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
            >
            <div  class="text-red-500 text-gray-700" v-if="errors.email" v-text="errors.email"></div>

        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase front-bold text-xs text-gray-700" for="password"> Password
            </label>

            <input v-model="form.password" class="border border-gray-400 p-2 w-full" type="password" name="password"
                   id="password">

            <div   class="text-red-500 text-gray-700" v-if="errors.password" v-text="errors.password"></div>
        </div>


        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Save
            </button>
        </div>
    </form>


</template>

<script setup>

import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";


defineProps({
    errors: Object
});


let form = reactive({
    name: '',
    email: '',
    password: '',
});
let submit = () => {
    Inertia.post('/users/store', form);
}

</script>

