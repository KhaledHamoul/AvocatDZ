<template>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="single-tab-select-box">

            <h2>Profile</h2>

            <div class="travel-select-icon">
                <select name="profile" class="form-control" v-on:change="$emit('changed',selected_profile)" v-model="selected_profile">
                    <option disabled selected>Profile</option><!-- /.option-->
                    <option v-for="profile in profiles" v-bind:value="profile.id">{{profile.profile}}</option>
                </select><!-- /.select-->
            </div><!-- /.travel-select-icon -->

        </div><!--/.single-tab-select-box-->
    </div><!--/.col-->
</template>

<script>
    export default {
        data()  {
            return {
                profiles: null,
                selected_profile: null
            }
        },
        mounted(){
            axios.get('/api/profiles/')
                 .then(data => {
                    this.profiles = data.data;
                 })
        },
        
    }
</script>