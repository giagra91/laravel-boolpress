<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Boolpress</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="(link, index) in headerLinks" :key="index">
                        <router-link class="nav-link active" :to=" { name: link.route }">{{ link.label }}</router-link>
                    </li>
                </ul>
                </div>
            </div>
        <a href="/home" class="nav-link nav-item active">Login</a>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Header",
    data: function (){
        return{
            headerLinks: [
                {
                    label: "Home",
                    route: "home"
                },
                {
                    label: "About Us",
                    route: "about-us"
                },
                {
                    label: "Posts",
                    route: "posts",
                }
            ]
        }
    }
}
</script>

<style>

</style>