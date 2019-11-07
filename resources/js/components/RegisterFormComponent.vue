<template>
    <div class="full-page">
        <div class="container">
            <ul class="form-ul">
                <li><a href="/register">買いたい人</a></li>
                <li ><a href="/register_second">売りたい人</a></li>
            </ul>
            <form action="/register" method="POST">
                <div class="form-group">
                    <label>名前</label>
                    <input class="form-control" type="text" v-model="name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control"type="text" v-model="email">
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input class="form-control" type="password"  v-model="password">
                    <input class="form-control" type="password"  v-model="password" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>再入力</label>
                    <input class="form-control" type="password" v-model="password_confirmation">
                    <input class="form-control" type="password" v-model="password_confirmation" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>郵便番号(ハイフンなし)</label>
                    <input class="form-control" type="tel" v-model="postNumber">
                </div>
                <div class="form-group">
                    <label>住所</label>
                    <input class="form-control" type="text" v-model="area">
                </div>  
                <div class="form-group">
                    <label>電話番号</label>
                    <input class="form-control" type="tel" v-model="tell">
                </div>
                <div class="button-area">
                    <input type="submit"  class="button" value="登録">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data:function(){
            return{
                name:'',
                email:'',
                password:'',
                password_confirmation:'',
                postNumber:'',
                area:'',
                tell:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>

<style scoped>
    .full-page{
        height: auto;
        background-image: url('/img/form.jpg');
        background-image: url('/img/form-new.jpg');
        background-size: 100% 
    }
    form{
        margin: 150px auto 0;
        padding-bottom: 100px;
        max-width: 500px;
    }
    .form-group{
        margin-bottom: 5px;
    }
    .button-area{
        margin: 20px auto;
        text-align: center;
    }
    .button{
        font-size: 20px;
        background: #8b4513;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
    }
</style>