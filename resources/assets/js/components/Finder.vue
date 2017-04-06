<template>
	<div class="form-group">
        <label>{{ trans('cms_galleries.Select an image or video') }}</label>
        <div class="row">
		  	<div class="col-md-3 col-sm-12">   
		    	<div class="finder-thumbnail" v-if="fileUrl">			      
		        	<img class="img-responsive" :src="fileUrl">
		    	</div>
		  	</div>
		</div>
		<div class="input-group">
		  	<div class="input-group-addon btn-finder" @click="BrowseServer('Images:/')">
		    	<a>{{ trans('cms_components.Choose a file') }}</a>
		  	</div>
		  	<input v-model="image" class="form-control"> 
		  	<div class="input-group-addon btn-finder" @click="CleanFileField">
		    	<a>{{ trans('cms_components.Do not use') }}</a>
		  	</div>
		</div>
  	</div>	
</template>

<script>

	export default{

		data() {
			return{

				fileUrl: [],
				image: '',
			}
		},

		created(){
			Event.listen('submitted',()=>this.CleanFileField());
		},

		methods: {

			BrowseServer(startupPath){
				var finder = new CKFinder();
				// You can use the "CKFinder" class to render CKFinder in a page:
			    //var finder = new CKFinder();
			    // The path for the installation of CKFinder (default = "/ckfinder/").
			    finder.basePath = '../';
			    // Startup path in a form: "Type:/path/to/directory/"
			    finder.startupPath = startupPath;
			    // Name of a function which is called when a file is selected in CKFinder.
			    finder.selectActionFunction = this.SetFileField;
			    // Additional data to be passed to the selectActionFunction in a second argument.
			    // We'll use this feature to pass the Id of a field that will be updated.
			    //finder.selectActionData = e;
			    // Name of a function which is called when a thumbnail is selected in CKFinder.
			    // finder.selectThumbnailActionFunction = ShowThumbnails;
			    // Launch CKFinder
			    finder.popup();
			},

			// This is a sample function which is called when a file is selected in CKFinder.
			SetFileField(fileUrl, data){
				this.fileUrl = fileUrl;
				var fileName = fileUrl.split('/');
				this.image = fileName[3];
				Event.fire('image',fileName[3]);
				window.close();   
			    
			},

			// This function clears the input field
			CleanFileField(){
				this.fileUrl = '';
			    this.image = '';
				Event.fire('image','');
			    
			}

			
		},

		

	}
</script>