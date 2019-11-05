<template>
    <div class="full-page">
        <div class="container">
            <ul class="form-ul">
                <li><a href="/register">買いたい人</a></li>
                <li ><a href="/register_second">売りたい人</a></li>
            </ul>
            <form action="/register" method="POST">
                <label>名前</label>
                <input type="text" v-model="name"><br/>
                <label>Email</label>
                <input type="text" v-model="email"><br/>
                <label>パスワード</label>
                <input type="password"  v-model="password"><br/>
                <label>再入力</label>
                <input type="password" v-model="password_confirmation"><br/>
                <label>郵便番号(ハイフンなし)</label>
                <input type="tel" v-model="postNumber"><br/>
                <label>住所</label>
                <input type="text" v-model="area"><br/>
                <label>電話番号</label>
                <input type="tel" v-model="tell"><br/>
                <input type="submit" value="登録">
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data:{
            name:'',
            email:'',
            password:'',
            password_confirmation:'',
            postNumber:'',
            area:'',
            tell:''
        },
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>

<style>
    .full-page{
        height: auto;
        background-image: url('/img/form.jpg');
        background-size: 100% 
    }
</style>