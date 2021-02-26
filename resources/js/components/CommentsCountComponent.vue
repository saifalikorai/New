<template>
    <li>
        <a>
           <a :href="'/post/'+this.post"> <span class="post-comment"> <i class="bi bi-chat-bubble"></i> </span> </a>
            <span> &nbsp; {{totalcomment}}</span>
        </a>
    </li>
</template>

<script>
export default {
    props:['post'],
    data: function() {
        return{
            totalcomment: '',
        }
    },

    mounted() {
        this.getComment();
    },

    methods: {
        getComment: function() {
            this.$root.$on('myEvent', (integer) => {
                axios.get('/getcount',{ params: {post: this.post} })
                .then((response) => {
                    this.totalcomment = response.data.count;
                })
                .catch(function(error){
                    console.log(error);
                });
            })
        }
    }
}
</script>