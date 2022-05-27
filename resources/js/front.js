window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

window.Vue = require('vue');
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import Home from "./pages/Home";
import Posts from "./pages/Posts";
import AboutUs from "./pages/AboutUs";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home-guest",
            name: "home",
            component: Home,
        },
        {
            path: "/posts-guest",
            name: "posts",
            component: Posts,
        },
        {
            path: "/about-us",
            name: "about-us",
            component: AboutUs,
        },
    ]
})

import App from "./views/App";

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});