<template>
    <div>
        <h1>Apple</h1>
    </div>
</template>

<script>
    export default {
        name: "app",
        computed(){
            this.axios.get(api).then((response) => {
                console.log(response.data)
            })
        }
    }
</script>

<style scoped>

</style>