class Gallery {
	static items(id,then){
		return axios.get('/gallery/'+id)
		.then(({data})=>then(data));
	}
}

export default Gallery;