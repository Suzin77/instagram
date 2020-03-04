<template>
    <div>
        <button class="btn btn-primary btn-sm ml-2" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {

        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            followUser(){

                axios.post('/follow/' + this.userId)
                    .then(response=>{
                        alert(response.data);
                    });
                alert('now you follow');
            }

        }
    }
</script>
