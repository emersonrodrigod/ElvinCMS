class Slide {
	static items(id,then){
		return axios.get('/slide/'+id)
		.then(({data})=>then(data));
	}
}

export default Slide;