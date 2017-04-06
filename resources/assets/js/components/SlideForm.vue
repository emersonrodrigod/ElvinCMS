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
		                <label>{{ trans('cms_slides.Title') }}</label>
		                <input ref="input" name="caption" @input="getCaption($event.target.value, key)" class="form-control" :rel="key">
	              	</div>
	              	<div class="form-group">      
	                    <label>{{ trans('cms_slides.Link') }}</label> 
	                    <input ref="link" name="link" @input="getLink($event.target.value, key)" class="form-control" :rel="key">
                  </div>
		 		</div>
	    	</div>
    	</div>

		<!-- for one language -->
		<div v-else>
	    	<div class="form-group">
	          	<label>{{ trans('cms_slides.Caption') }}</label>
	          	<input ref="input"  name="caption" @input="getCaption($event.target.value, session_lang)" class="form-control">
	        </div>
	        <div class="form-group">      
	            <label>{{ trans('cms_slides.Link') }}</label> 
	            <input ref="link" name="link" @input="getLink($event.target.value, key)" class="form-control" :rel="key">
	      	</div>
      	</div>

		<!-- submit form -->
      	<div class="box-footer">
        	<button type="submit" class="btn btn-primary" > {{ trans('Add to gallery') }}</button>
      	</div>

	</form>
	
</template>

<script>

	export default{

		props:['languages', 'session_lang', 'slide_id', 'multi_language'],

		data() {
			return{
				form: new Form({ 
					caption:[],
					link:[],
					image:'',
					slide_id: ''
				}),

				captions :{},
				links :{},
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
				this.form.link = this.links;
				this.form.slide_id = this.slide_id;
				this.form
				.post('/slide/items')
				.then(
					item=>Event.fire('submitted', item[0]), 
					$('input[name="caption"]').val(''),
					$('input[name="link"]').val('')
				);
			},

			getCaption(item,lang){
				this.captions[lang] = item;
			},

			getLink(item,lang){
				this.links[lang] = item;
			}
		}

	}
</script>