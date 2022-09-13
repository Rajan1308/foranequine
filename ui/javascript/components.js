Vue.component( 'search-form', {
  template: `
  
    <form>
      <input 
        type="text" 
        placeholder="Search..."
        v-model="search_input" 
      />
    </form>
  `,
  data() {
    return {
      search_input: null
    }
  }


})


// list of posts

Vue.component('posts-list', {

  props: {
    set_posts: {
      type: Array,
      required: false
    }
  },


  template: `
    <div>
    <h1>Posts</h1>
    <ul>
      <li v-for="post in set_posts">
        <h3>{{ post.post_title }}</h3>
        <p v-html="post.post_excerpt"></p>
        <a :href="post._get_permalink">Read More</a>
      </li>
    </ul>
    </div>  
  `,
  computed: {

  }
})





let app = new Vue (
  {
    el: '#app',
    data: {
      
      posts: null
    },
    methods: {
      get_posts() {

        var data = {
          'action'  :   'mx_get_posts',
          'nonce'   :    mx_app.nonce
        };

        let _this = this

        jQuery.post( mx_app.ajax_url, data, function( response ) {
          let result = JSON.parse( response );
          _this.posts = result
        //  console.log(result);
        });
      }
    },
    // 
    watch: {
      // posts() {
      //   $emit('posts', this.posts)
      // }
    },
    mounted() {
      this.get_posts()
    }
  }
)

// 