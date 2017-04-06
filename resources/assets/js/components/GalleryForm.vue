<template>
	<form @submit.prevent="onSubmit">

		<!-- CKFinder component -->
		<Finder></Finder> 

		<!-- for multiple languages -->
      	<div v-if="multi_language == 1">
	        <ul class="nav nav-tabs" role="tablist">        
	          	<li v-for="(value,key) in languages" role="presentation" :class="{active: key == session_lang}"><a :href="tab(key)" aria-controls="home" role="tab" data-toggle="tab"><img class="flag" :src="sourceFlag(key)">{{value}}</a></li>   
	        </ul>
	        <!-- Tab panes -->
	        <div class="tab-content">
		        <div v-for="(value,key) in languages" role="tabpanel" class="tab-pane" :class="{active :key == session_lang}" :id="key">
		            <div class="form-group">
		                <label>{{ trans('cms_galleries.Caption') }}</label>
		                <input ref="input" name="caption" @input="getValue($event.target.value, key)" class="form-control" :rel="key">
	              	</div>
		 		</div>
	    	</div>
    	</div>

		<!-- for one language -->
    	<div v-else class="form-group">
          	<label>{{ trans('cms_galleries.Caption') }}</label>
          	<input ref="input"  name="caption" @input="getValue($event.target.value, session_lang)" class="form-control">
        </div>

		<!-- submit form -->
      	<div class="box-footer">
        	<button type="submit" class="btn btn-primary" > {{ trans('Add to gallery') }}</button>
      	</div>

	</form>
	
</template>

<script>

	export default{

		props:['languages', 'session_lang', 'gallery_id', 'multi_language'],

		data() {
			return{
				form: new Form({ 
					caption:[],
					image:'',
					gallery_id: ''
				}),

				captions :{},
			}
		},

		created(){
			Event.listen('image',(item)=>this.form.image = item);
		},

		methods: {
			sourceFlag(item){
				return '/cms/img/flags/'+item+'.png';
			},

			tab(item){
				return '#'+item;
			},

			onSubmit() {
				this.form.caption = this.captions;
				this.form.gallery_id = this.gallery_id;
				this.form
				.post('/gallery/items')
				.then(
					item=>Event.fire('submitted', item[0]), 
					$('input[name="caption"]').val('')
				);
			},

			getValue(item,lang){
				this.captions[lang] = item;
			}
		}

	}
</script>