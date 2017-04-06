<template>
	<div>
	    <div class="col-md-3 box-photo" v-for="(item,key) in gallery.items">
	      	<div class="destroyItem" @click.prevent="destroyItem(item,key)"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></div>
	      	<div class="caption" v-for="d in item.details">
	      		<span class="label label-default">
	      			<img class="flag flag-xs" :src="sourceFlag"> {{d.caption}}
	  			</span>
	      	</div>
	        <img class="img-responsive" :src="sourceImage(item)">
	    </div>
	    <div class="col-md-3 box-photo">
            <div class="caption"><span class="label label-default"></span></div>
            <img class="img-responsive" src="/cms/img/plus.jpg">
        </div>
    </div>
</template>

<script>

import Gallery from '../models/Gallery';
import GalleryForm from '../components/GalleryForm.vue';

	export default{
		components: { GalleryForm },

		props:['gallery_id','session_lang'],

		data() {
			return{
				gallery: []
			}
		},

		created(){
			Gallery.items(this.gallery_id, gallery=>this.gallery=gallery);
			Event.listen('submitted',(item)=>this.addItem(item));

		},


		methods: {
			sourceImage(item){
				if(_.startsWith(item.image, 'http')){
					return item.image;
				}
				else{
					return '/data/_images/'+item.image;
				}
			},

			addItem(item){
                this.gallery.items.unshift(item);
                //window.scrollTo(0,0);
            },

            destroyItem(item,key){
            	axios.post('/gallery/destroyItem', {
			    	id: item.id
			  		})
				  	.then(
				  		this.gallery.items.splice(key, 1)
				  	)
				  	.catch(function (error) {
				    	console.log(error);
			  		});
            }		
			
		},

		computed: {
			sourceFlag(){
				return '/cms/img/flags/'+this.session_lang+'.png';
			}
			
		}

	}
</script>