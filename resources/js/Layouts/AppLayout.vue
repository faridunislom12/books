<template>
    <!--<div>-->
    <!--    <header class="bg-white shadow">-->
    <!--        <Navbar/>-->
    <!--    </header>-->
    <!--    <main>-->
    <!--        <slot></slot>-->
    <!--    </main>-->
    <!--</div>-->


    <div>

        <!-- NAVIGATION
    ================================================== -->
        <Navbar/>

        <slot></slot>
    </div>


</template>


<script>

import Navbar from '@/Layouts/Navbar'

export default {
    components: {
        Navbar
    },

    data() {
        return {}
    },

    methods: {}
}
</script>
