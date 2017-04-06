<template>
	<div>
	    <div class="col-md-3 box-photo" v-for="(item,key) in slide.slide_items">
	      	<div class="destroyItem" @click.prevent="destroyItem(item,key)"><span class="btn btn-danger"><i class="fa fa-trash"></i></span></div>
	      	<div class="caption" v-for="d in item.slide_item_details">
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

import Slide from '../models/Slide';

	export default{

		props:['slide_id','session_lang'],

		data() {
			return{
				slide: []
			}
		},

		created(){
			Slide.items(this.slide_id, slide=>this.slide=slide);
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
                this.slide.slide_items.unshift(item);
                //window.scrollTo(0,0);
            },

            destroyItem(item,key){
            	axios.post('/slide/destroyItem', {
			    	id: item.id
			  		})
				  	.then(
				  		this.slide.slide_items.splice(key, 1)
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