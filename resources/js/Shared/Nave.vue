<template>
     <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Link href="/" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline':$page.url =='/'}"> HOME</Link>
            </li>
            <li>
                <Link href="/users" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline':$page.url.startsWith('/users')  }"> Users</Link>
            </li>
            <li>
                <Link href="/settings" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline':$page.url.startsWith('/settings')}">Settings</Link>
            </li>
            <li>
                <Link href="/contact_us" class="text-blue-500 hover:underline"
                      :class="{'font-bold underline':$page.component=='ContactUs'}">Contact us</Link>
            </li>
            <li>
                <Link href="/logout" method="post" as="button" :data="{foo:'bar'}" class="text-blue-500 hover:underline" >Logout</Link>
            </li>

        </ul>
    </nav>
</template>


<script>

import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link
    }
};
</script>
