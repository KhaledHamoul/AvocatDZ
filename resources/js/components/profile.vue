<template>
    <div class="single-query form-group">
        <div class="intro">
            <select id="profile-select" name="profile" class="zelect zelected dropdown-filter" v-on:change="$emit('changed',selected_profile)" v-model="selected_profile">
                <option selected disabled> Profile ...</option>
                <option v-bind:id="profile.profile" v-for="profile in profiles" v-bind:value="profile.id">{{profile.profile}}</option>                
            </select>
        </div>
    </div>         
</template>

<script>
    export default {
        data()  {
            return {
                profiles: null,
                selected_profile: 'Profile ...'
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