<template>
    <nav>
        <ul class="flex  space-x-6 ">
            <li>
                <NaveLink href="/" :active="$page.component == 'Home'"> HOME</NaveLink>
            </li>

            <li>
                <NaveLink href="/users" :active="$page.component == 'Users'"> Users</NaveLink>
            </li>
            <li>
                <NaveLink href="/settings" :active="$page.component == 'Settings'"> Settings</NaveLink>
            </li>

            <li>
                <NaveLink href="/contact_us" :active="$page.component == 'ContactUs'"> Contact Us</NaveLink>
            </li>
        </ul>
    </nav>
</template>


<script>

import NaveLink from "./NaveLink";

export default {
    components: {
        NaveLink,
    }
};
</script>
