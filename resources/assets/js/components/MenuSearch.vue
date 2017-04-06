<template>
	<div>
			<input type="text" name="link" v-model="q" class="form-control"  @keyup="onSubmit">
		<ul class="list-unstyled" v-show="showResult">
			<li v-for="result in result_pages">
	            <a @click.prevent="hrefPages(result.id, result.slug)"> {{result.title}} </a>
	        </li>
	        <li v-for="result in result_posts">
	            <a @click.prevent="hrefPosts(result.id, result.slug)"> {{result.title}} </a>
	        </li>
	        <li v-for="result in result_categories">
	            <a @click.prevent="hrefCategories(result.id, result.slug)"> {{result.title}} </a>
	        </li>
		</ul>
	</div>
</template>

<script>

import MenuSearch from '../models/MenuSearch';

	export default{
		props:['menu'],

		data() {
			return{
				q: '',
				pages: [],
				posts: [],
				categories: [],
				showResult: false,
			}
		},

		created(){
			MenuSearch.pages(pages=>this.pages=pages);
			MenuSearch.posts(posts=>this.posts=posts);
			MenuSearch.categories(categories=>this.categories=categories);

			this.q = JSON.parse(this.menu).link;
		},


		methods: {
			hrefPages(id,slug){
				console.log('deneme');
				this.q = '/pages/'+id+'/'+slug;
			},
			hrefPosts(id,slug){
				this.q = '/posts/'+id+'/'+slug;
			},
			hrefCategories(id,slug){
				this.q = '/categories/'+id+'/'+slug;
			},
			onSubmit(){
				if(this.q == ''){
					this.showResult = false;
				}else{
					this.showResult = true;
				}				
			}
		},

		computed: {
			result_pages(){
				return this.pages.filter(item=>_.includes(item.title, this.q));
			},
			result_posts(){
				return this.posts.filter(item=>_.includes(item.title, this.q));
			},
			result_categories(){
				return this.categories.filter(item=>_.includes(item.title, this.q));
			},
		}

	}
</script>