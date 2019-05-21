<template>
    <div class="container">
        {{greeting}}
        <button @click="updateTimestamp">Update</button>
    </div>
</template>

<script>
    export default {
        props: {
            greeting: String
        },
        // data() {
        //     return {
        //         greeting: "Click the button to view the latest date and time!"
        //     }
        // },
        methods: {
            updateTimestamp() {
                this.greeting = new Date().toLocaleString()
            }
        },
        // mounted() {
        //     console.log('Component mounted.')
        // }
    }
</script>
