<template>
    <div>
        <!-- toggle button -->
        <a href="#" class="badge badge-complete" data-toggle="modal" :data-target="idWithDash"><i class="fa fa-eye"></i></a>				
        <!-- End toggle button -->
        <!-- Info Client Model-->
        <div class="modal fade" :id="idWithoutDash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 d-flex justify-content-center mb-12">
                                <img style="width:100px;height: 120px;" src="Vitrine_assets/images/client/testimonial2.jpg"/>
                            </div> 
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-8  ">
                                <div class="dropdown-divider"></div>   
                            </div>
                            <div class="col-8">
                                <div  class="row">
                                    <div class="col-6 d-flex ">
                                        <strong class="card-title">Nom</strong>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p>{{ client.nom }}</p>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="dropdown-divider"></div>   
                                    </div>
                                    <div class="col-6 d-flex ">
                                        <strong class="card-title">Prénom</strong>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p>{{ client.prenom }}</p>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="dropdown-divider"></div>   
                                    </div>
                                    <div class="col-6 d-flex ">
                                        <strong class="card-title">Téléphone</strong>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p>{{ client.telephone }}</p>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="dropdown-divider"></div>   
                                    </div>
                                    <div class="col-6 d-flex ">
                                        <strong class="card-title">Adresse</strong>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p>{{ client.adresse }}</p>
                                    </div>
                                    <div class="col-12  ">
                                        <div class="dropdown-divider"></div>   
                                    </div>
                                    <div class="col-6 d-flex ">
                                        <strong class="card-title">Ville</strong>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center">
                                        <p>{{ client.ville }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
                <div class="modal-footer">
                </div>
                </div>
            </div>
        </div>	
        <!-- End Info Client Model-->
    </div>
</template>

<script>
    
    export default {
        props: [
            'clientId',
        ],
        data() {
            return {
                client: null,
                idWithDash: null,
                idWithoutDash: null,
				csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
        mounted(){
            axios.get('/api/clients/'+ this.clientId)
                 .then(data => {
                    this.client = data.data;
                    this.idWithDash = '#' + this.client.name + this.clientId
                    this.idWithoutDash = this.client.name + this.clientId
                    console.log(this.client)
                 })
        },  
    }
</script>