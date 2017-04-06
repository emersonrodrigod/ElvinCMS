
import './bootstrap';
import './utilities/Event';

/* use trans() in vue files */
Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};



Vue.component('menu-search',require('./components/MenuSearch'));
Vue.component('gallery-items',require('./components/GalleryItems'));
Vue.component('gallery-form',require('./components/GalleryForm'));
Vue.component('slide-items',require('./components/SlideItems'));
Vue.component('slide-form',require('./components/SlideForm'));
Vue.component('Finder',require('./components/Finder'));
Vue.component('app-header',require('./components/AppHeader'));

/* admin post edit and create page published time */
new Vue({
    el: '#vue_post',

    data: {
    	button_text: 'Edit',
    	hide_text: 'hidden'

    },

    methods: {
    	toggle_text() {
    		if (this.hide_text){
    			this.hide_text = '';
    			this.button_text = 'Close';
    		}
    		else {
    			this.hide_text = 'hidden';
    			this.button_text = 'Edit';
    		}
    		
    	}
    }
});

/* admin menu url search component */
new Vue({
    el: '#menu-search'    
});

/* admin gallery edit page  component */
new Vue({
    el: '#gallery-edit'
});

/* admin slide edit page  component */
new Vue({
    el: '#slide-edit'
});

/* app header component */
new Vue({
    el: '#app'    
});




