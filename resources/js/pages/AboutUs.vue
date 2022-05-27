<template>
    <div class="container-fluid">
        <h1>About Us</h1>
        <div class="row">
            <div class="col-2" v-for="(element, index) in 6" :key="index">
                <div class="card">
                    <img :src="`https://picsum.photos/id/5` + index +`/450/600`" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Contattaci</h5>
                        <p class="card-text">Seguici sui nostri social</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>