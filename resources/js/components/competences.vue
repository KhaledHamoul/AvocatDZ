<template>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="single-tab-select-box">

            <h2>Compétence en</h2>

            <div class="travel-select-icon">
                <select name="competence" class="form-control "  v-model="selected_competence">
                    <option disabled selected>Compétence en ...	</option><!-- /.option-->
                    <option v-for="competence in competences" v-bind:value="competence.id">{{competence.competence}}</option>
                </select><!-- /.select-->
            </div><!-- /.travel-select-icon -->

        </div><!--/.single-tab-select-box-->
    </div><!--/.col-->
</template>

<script>
    export default {
        props: [
            'competences',
        ],
        data()  {
            return {
                selected_competence: null
            }
        }
        
    }
</script>