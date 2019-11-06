<template>
    <footer>
        <div id="footer-area">
            <div id="scroll-button">
                <span class="scroll" @click="PageTop">^</span>
            </div>
            <nav class="nav">
                <div class="nav-item"><a href="/">TOP</a></div>
                <div class="nav-item"><a href="/register">Register</a></div>
                <div class="nav-item"><a href="/login">Login</a></div>
                <div class="nav-item"><a href="/detail">Detail</a></div>
            </nav>
            <p class="footer-comment">Copyright © 2019 Kytaro&Mochi All Rights Reserved.</p>
        </div>
    </footer>
</template>

<script>
    export default {
        methods:{
            PageTop: function(){
                scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            }
        }
    }

</script>

<style scoped>
    #footer-area{
        max-width: 980px;
        margin: 0 auto;
        text-align: center;
    }
    footer{
        background: #703f27;
        padding: 0;
        margin: 0;
        width: 100%;
    }
    #scroll-button{
         width: 50px;
        height: 50px;
        border-radius: 50%;
        position: relative;
        top: -25px;
        left: 50%;
        transform: translate(-50%,0);
        background: #703f27;

    }
    span.scroll{
        font-size: 2rem;
        color: white;
        padding: 5px 12px;
        cursor: pointer;
    }
    nav{
        display: flex;
        justify-content:center;
        margin-bottom: 20px;
    }
    a:visited{
        color:white
    }
    .nav-item{
        padding: 0 10px;
        font-size: 1.2rem;
        border-right: solid white 1px;
    }
    .nav-item:last-child{
        border: none;
    }
    .nav-item a:hover{
        text-decoration: underline;
    }
    .nav-item a{
        text-decoration: none;
        color: white;
    }
    .footer-comment{
        font-size: 1.12rem;
        color: white;
        padding-bottom: 20px;
    }

</style>
