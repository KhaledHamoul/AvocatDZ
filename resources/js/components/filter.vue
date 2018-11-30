<template>				
	<form method="post" action="/professionnels">
		<div class="row">
			<input type="hidden" name="_token" :value="csrf">

			<profile v-on:changed="profile_changed"></profile>
			<competences v-bind:competences="competences" ></competences>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="single-tab-select-box">

					<h2>Ville</h2>

					<div class="travel-select-icon">
						<select name="ville" class="form-control ">
							<option disabled selected>Spécifier votre ville</option><!-- /.option-->
							<option value="Alger">Alger</option><!-- /.option-->
							<option value="Oran">Oran </option><!-- /.option-->
							<option value="Annaba">Annaba</option><!-- /.option-->
						</select><!-- /.select-->
					</div><!-- /.travel-select-icon -->

				</div><!--/.single-tab-select-box-->
			</div><!--/.col-->
		</div><!--/.row-->

		<div class="row">
			<div class="clo-sm-7">
				<div class="about-btn travel-mrt-0 pull-right">
					<button  class="about-view travel-btn">
							Chercher &nbsp &nbsp <i class="fa fa-search"></i>
					</button><!--/.travel-btn-->
				</div><!--/.about-btn-->
			</div><!--/.col-->

		</div><!--/.row-->
	</form>				
</template>

<script>
    
    export default {
        data() {
            return {
				competences: null,
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
        methods: {
            profile_changed: function(selected){
                axios.get('/api/competences/'+ selected )
                 .then(data => {
                    this.competences = data.data;
                 })
            }
        }
        
    }
</script>