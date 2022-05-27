<template>
    <div class="container-fluid">
        <Header />
        <main>
            <Main />
        </main>
    </div>
</template>

<script>
import Main from "../components/Main.vue";
import Header from "../components/Header.vue";

export default {
    name: "App",
    components:{
        Main,
        Header
    },
    data: function(){
        return {

        }
    },

}
</script>

<style lang="scss" scoped>
main{
    min-height: 80vh;
}

</style>