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
a:visited{
    color:white
}
.nav-item{
    margin: 0 10px;
    font-size: 1.2rem;
}
.nav-item a:hover{
    text-decoration: underline;
}
.nav-item a{
    text-decoration: none;
    color: white;
}
.header-title{
    line-height: 80px;
    padding-left: 50px;
    font-size: 2.6rem;
    color: white;
}
</style>
