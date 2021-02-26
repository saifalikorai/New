<template>
    <div>
        <div class="card-footer card-comments" v-for="value in comments" v-bind:key="value.id">
            <div class="card-comment">
            <!-- User image -->
            <img class="img-circle img-sm" :src="value.user.profile_pic_path" alt="">

            <div class="comment-text">
                <span class="username">
                {{ value.user.name }}
                <span class="text-muted float-right">{{ value.created_at | moment("from", "now")}}</span>
                </span><!-- /.username -->
                {{value.comment}}
            </div>
            <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>

        <div class="card-footer">
            <form @submit.prevent="commentPost">
                <input type="hidden" name="_token" :value="csrf">
                <img class="img-fluid img-circle img-sm" :src="user.profile_pic_path" alt="">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment" v-model="comment">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props:['post', 'user'],
    data: function() {
        return{
            comments: null,
            comment: null,
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },

    mounted() {
        this.getComment();
        this.$root.$emit('myEvent', this.post);

    },

    methods: {
        commentPost: function() {
            if(this.comment != null && this.comment != ""){
                axios.post('/comment', {post:this.post, user:this.user.id, comment:this.comment})
                .then((response) => {
                    this.getComment()
                    $('#success').html(response.data.message)
                    this.comment = ""
                    this.$root.$emit('myEvent', this.post)
                })
                .catch(function(error){
                    console.log(error);
                });
            }
        },
        getComment: function() {
            axios.get('/getcomment',{ params: {post: this.post} })
            .then((response) => {
                this.comments = response.data.comments;
            })
            .catch(function(error){
                console.log(error);
            });
        }

    }
}
</script>


