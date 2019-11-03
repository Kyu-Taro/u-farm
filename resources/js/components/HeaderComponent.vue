<template>
    <header>    
        <div id="header-area">
            <div id="title">
                <h1 class="header-title"><a href="/">U-farm</a></h1>
            </div>
            <nav class="nav justify-content-end">
                <div class="nav-item"><a href="/">TOP</a></div>
                <div class="nav-item"><a href="/register">Register</a></div>
                <div class="nav-item"><a href="/login">Login</a></div>
                <div class="nav-item"><a href="/detail">Detail</a></div>
            </nav>
        </div>
    </header>
</template>

<style scoped>
#title{
    margin-bottom: 0;
    float: left;
}
#header-area{
    max-width: 980px;
    margin: 0 auto;
}
header{
    height: 80px;
    background: #703f27;
    padding: 0;
    margin: 0;
    width: 100%;
}
h1{
    margin-bottom: 0;
}

nav{
    float: right;
    display: flex;
    align-items: center;
    height: 80px;
}
.nav-item{
    margin: 0 30px;
}
ul.header-nav{
    /* float: right; */
    list-style: none;
}
.header-nav li{
    /* float: left; */
    font-size: 1.6rem;
    line-height: 80px;
}
.header-nav li:hover{
    text-decoration: underline;
}
.header-nav li a{
    text-decoration: none;
    color: black;
    margin-right: 25px;
    font-weight: bold;
    color: white;
}
.header-title{
    line-height: 80px;
    padding-left: 50px;
    font-size: 2.6rem;
    color: white;
}
.header-title a{
    color: white;
    text-decoration: none;
}
</style>
