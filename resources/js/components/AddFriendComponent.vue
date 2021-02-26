<template>
    <div class="col-lg-4 col-md-3 d-none d-md-block">
        <div class="profile-edit-panel" v-if="status === 'pending'">
            <button class="edit-btn" @click="acceptRequest()">Confirm</button> 
            <button class="edit-btn" @click="rejectRequest()">Reject</button>
        </div>
        <div class="profile-edit-panel" v-else>
            <button class="edit-btn" @click="status ? sendRequest() : (status == false) ? cancelRequest() : removeFriend()">{{buttonval}}</button>
        </div>
    </div>
</template>

<script>
export default {
    props:['user'],
    data: function() {
        return{
            status: '',
            buttonval: '', 
        }
    },

    mounted() {
        this.getFriend();
    },

    methods: {
        getFriend(){
            axios.get('/getFriend',{ params: {user:this.user} })
            .then((response) => {
                this.buttonval = response.data.text;
                this.status = response.data.status;
            })
            .catch(function(error){
                console.log(error);
            });
        },
        sendRequest() {
            axios.post('/sendRequest',{user:this.user})
            .then((response) => {
                Toast.fire({
                icon: 'success',
                title: response.data.message,
                });
                $('#success').html(response.data.message)
                this.buttonval = response.data.text
                this.status = response.data.status;
            })
            .catch(function(error){
                console.log(error);
            });
        },
        cancelRequest() {
            Swal.fire({
              title: "Cancel Friend Request?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'cancel request!'
              }).then((result) => {
                if (result.value) {
                    axios.post('/cancelRequest',{user:this.user})
                    .then((response) => {
                        this.buttonval = response.data.text
                        this.status = response.data.status;
                        Swal.fire(
                        'Request Cancelled!',
                        'You can add this user again!',
                        'success'
                        );
                    })
                    .catch(function(error){
                        console.log(error);
                    });
                    
                }
            });
        },
        removeFriend() {
            Swal.fire({
              title: "Remove this friend?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Remove!'
              }).then((result) => {
                if (result.value) {
                    axios.post('/removeFriend',{user:this.user})
                    .then((response) => {
                        this.buttonval = response.data.text
                        this.status = response.data.status;
                        Swal.fire(
                        'Friend Removed!',
                        'You can add this user again!',
                        'success'
                        );
                    })
                    .catch(function(error){
                        console.log(error);
                    });
                
                }
            });
        },
        acceptRequest() {
            axios.post('/acceptRequest',{user:this.user})
            .then((response) => {
                Toast.fire({
                icon: 'success',
                title: response.data.message,
                });
                $('#success').html(response.data.message)
                this.buttonval = response.data.text
                this.status = response.data.status;
            })
            .catch(function(error){
                console.log(error);
            });
        },
        rejectRequest() {
            Swal.fire({
              title: "Reject Friend Request?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'reject request!'
              }).then((result) => {
                if (result.value) {
                    axios.post('/rejectRequest',{user:this.user})
                    .then((response) => {
                        this.buttonval = response.data.text
                        this.status = response.data.status;
                        Swal.fire(
                        'Request Rejected!',
                        'You can add this user again!',
                        'success'
                        );
                    })
                    .catch(function(error){
                        console.log(error);
                    });
                }
            });
        },
    }
}
</script>