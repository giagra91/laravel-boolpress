<template>
    <div class="container-fluid">
        <Header />
        <main>
            <Main />
        </main>
        <!-- <PostsList /> -->
    </div>
</template>

<script>
// import PostsList from "../components/PostsList.vue";
import Main from "../components/Main.vue";
import Header from "../components/Header.vue";

export default {
    name: "App",
    components:{
        // PostsList,
        Main,
        Header
    },
    data: function(){
        return {

        }
    },

}
</script>

<style>

</style>