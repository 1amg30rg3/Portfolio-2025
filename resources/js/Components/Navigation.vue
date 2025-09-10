<template>
    <div id="navigation">
        <div class="nav-items">
            <Link :href="route('testPage')"class="n_item">
                Home
            </Link>

            <Link :href="route('testPage')"class="n_item">
                Front End
            </Link>

            <Link :href="route('testPage')"class="n_item">
                Back End
            </Link>

            <Link :href="route('testPage')"class="n_item">
                Projects
            </Link>

            <Link :href="route('testPage')"class="n_item">
                About Me
            </Link>

            <Link :href="route('testPage')"class="n_item">
                Contact
            </Link>

            <Link :href="route('testPage')"class="n_item">
                Message
            </Link>

            <Link :href="route('testPage')"class="n_item">
                About App
            </Link>
        </div>
    </div>
</template>

<style scoped>
    #navigation{
        position: fixed;
        left: 0;
        top: 50%;
    }

    #navigation .nav-items{
        display: grid;
        justify-content: center;
        align-items: center;
    }

    #navigation a{
        display: block;
        text-align: center;
        padding: 10px 0;
    }
</style>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>
