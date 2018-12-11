<template>	
	<div>			
		<input type="hidden" name="_token" :value="csrf">
		<profile v-on:changed="profile_changed"></profile>
		<competences v-bind:competences="competences" v-bind:disableState="disableState" ></competences>
		<div class="single-query form-group">
			<div class="intro">
				<select name="ville" class="zelect zelected dropdown-filter">
					<option selected disabled> Ville ...</option>
					<option value="alger">Alger</option>
					<option value="oran">Oran</option>
					<option value="annaba">Annaba</option>
				</select>
			</div>
		</div>	
	</div>
</template>

<script>
    
    export default {
        data() {
            return {
				competences: null,
				disableState: true,
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
        methods: {
            profile_changed: function(selected){
				this.disableState = true
                axios.get('/api/competences/'+ selected )
                 .then(data => {
					this.competences = data.data
					this.disableState = false
                 })
            }
        }
        
    }
</script>