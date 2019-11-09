<template>
    <div class="full-page">
        <div class="container">
            <ul class="form-ul">
                <li><a href="/register">買いたい人</a></li>
                <li ><a href="/register_second">売りたい人</a></li>
            </ul>
            <form action="/register" method="POST">
                <input type="hidden" name="_token" :value="csrf">
                <div class="form-group">
                    <label>名前</label>
                    <input class="form-control" name="name" type="text" v-model="name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" type="text" v-model="email">
                </div>
                <div class="form-group">
                    <label>パスワード</label>
                    <input class="form-control" name="password" type="password"  v-model="password" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>再入力</label>
                    <input class="form-control" name="password_confirmation" type="password" v-model="password_confirmation" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>郵便番号(ハイフンなし)</label>
                    <input class="form-control" name="postNumber" type="tel" v-model="postNumber">
                </div>
                <div class="form-group">
                    <label>住所</label>
                    <input class="form-control" name="area" type="text" v-model="area">
                </div>  
                <div class="form-group">
                    <label>電話番号</label>
                    <input class="form-control" name="tell" type="tel" v-model="tell">
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
        props:[
            'old'
        ],
        data:function(){
            return{
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                name: this.old.name,
                email:this.old.email,
                password:'',
                password_confirmation:'',
                postNumber:this.old.postNumber,
                area:this.old.area,
                tell:this.old.tell,
            }
        },
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>

<style scoped>
    .full-page{
        position: relative;
        height: auto;
        background-image: url('/img/form-new.jpg');
        background-size: cover;
        z-index: 0;
    }
    .full-page::before{
        content: '';
        position: absolute;
        top: -2px;
        bottom: -2px;
        left: -2px;
        right: -2px;
        background-image: inherit;
        filter: blur(2px);
        z-index: -1;
    }
    form{
        margin: 10% auto 0;
        padding-bottom: 100px;
        max-width: 500px;
    }
    .form-group{
        margin-bottom: 5px;
        color:#333;
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