class MenuSearch {

	static pages(then){
		return axios.get('/menu/searchPages')
			.then(({data})=>then(data));
	}

	static posts(then){
		return axios.get('/menu/searchPosts')
			.then(({data})=>then(data));
	}

	static categories(then){
		return axios.get('/menu/searchCategories')
			.then(({data})=>then(data));
	}
	
}

export default MenuSearch;