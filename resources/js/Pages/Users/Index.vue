<template>

    <Head title="User"/>

    <div class="flex justify-between mb-6">
        <h1 class="text-4xl"> Users </h1>
        <Link href="/users/create" class="text-blue-500"> New User </Link>
        <input type="text" placeholder="Search..." class="border px-2rounded-lg" v-model="search">

    </div>
    <Nav/>


    <div class="flex flex-col mt-8">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Email
                        </th>

                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Edit
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Delete
                        </th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    <tr v-for="user in users.data" :key="user.id">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    <img class="w-10 h-10 rounded-full" src="https://source.unsplash.com/user/erondu"
                                         alt="admin dashboard ui">
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ user.name }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-500">{{ user.email }}</div>
                        </td>

                        <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </td>

                        <td
                            class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                            <Link :href="'/users/${user.id}/edit'" class="text-indigo-600 hover:text-indigo-900">Edit
                            </Link>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <Pagination :links="users.links" class="mt-6"/>


</template>
<script setup>
import Pagination from "../../Shared/Pagination";
import {ref, watch} from "vue";
import {Inertia} from "@inertiajs/inertia"


let props = defineProps({
    users: Object,
    filters: Object
})


let search = ref(props.filters.search);


watch(search, value => {
    Inertia.get('/users', {search: value}, {
        preserveState: true,
        replace:true
    });
});


</script>

