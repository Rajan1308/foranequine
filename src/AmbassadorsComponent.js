import React from "react";
import useFetch from './useFetch'

function AmbassadorsComponent() {
  const posts  = useFetch('/wp-json/wp/v2/ambassadors?_embed');
   

  return (
    <div className="row" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="100">
      { posts && posts.map((post, index) => (
      <div class="col-lg-4 col-md-6 mb-4" key={index}>
          <div class="equine-mbassadors-box">
            <a href={ post.link }><img src={ post.fimg_url } alt="" /></a>
              
              <div class="social-media-overlay">
                <div class="follow">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="content">
              <h5>{ post.title.rendered }</h5>
              <p class="m-0">{ post.acf.am_sub_title }</p>
            </div>
          </div>
        </div>
        ))
      }
    </div>
  )
}

export default AmbassadorsComponent