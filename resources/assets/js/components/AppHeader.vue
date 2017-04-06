<template>
	<header class="intro-header" :style="image(background)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>{{heading}}</h1>
                        <hr class="small">
                        <span class="subheading">{{subheading}}.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
	export default{
		props:['background', 'heading', 'subheading'],

		data() {
			return{
				
			}
		},

		created(){
		},

		methods: {
			image(item){
				return "background-image: url('"+item+"')";
			}
			
		}


	}
</script>