<template>
    <layout>
        <h1>About</h1>
        <h2>{{site}}</h2>
        <a :href="url" target="_blank">{{site}}</a>

    </layout>
</template>

<script>
    import Layout from '@/Shared/Layout'

    export default {
        components: {
            Layout,
        },

        data: function () {
            return {
                site: "菜鸟教程",
                url: "http://www.runoob.com",
                alexa: "10000"
            }
        },

    }
</script>
