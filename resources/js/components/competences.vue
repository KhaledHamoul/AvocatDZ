<template>
    <div class="single-query form-group">
        <div class="intro">
            <select name="competence" v-bind:class="{ selectWait : disableState }" class="zelect  zelected  dropdown-filter" v-bind:disabled="disableState"  v-model="selected_competence">
                <option disabled selected>Compétence en ...	</option><!-- /.option-->
                <option v-for="competence in competences" v-bind:value="competence.id">{{competence.competence}}</option>
            </select><!-- /.select-->    
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'competences',
            'disableState',
        ],
        data()  {
            return {
                selected_competence: 'Compétence en ...'
            }
        }
        
    }
</script>