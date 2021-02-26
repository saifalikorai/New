<template>
<a>
    <span class="post-meta-like">
        <i id="like-icon"  :class="icon" @click="likePost"></i>
    </span>
    <span> &nbsp; {{totallike}} people like this</span>
</a>

</template>

<script>
export default {
    props:['post', 'user'],
    data: function() {
        return{
            icon: '',
            totallike: '',
        }
    },

    mounted() {
        this.getLike();
    },

    methods: {
        likePost: function() {
            axios.post('/like/'+this.post,{post:this.post, user:this.user})
            .then((response) => {
                this.getLike()
                $('#success').html(response.data.message)
            })
            .catch(function(error){
                console.log(error);
            });
        },
        getLike: function() {
            axios.get('/getlike',{ params: {post: this.post, user:this.user} })
            .then((response) => {
                this.icon = response.data.icon;
                this.totallike = response.data.post;
            })
            .catch(function(error){
                console.log(error);
            });
        }
    }
}
</script>