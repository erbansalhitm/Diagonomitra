@include('front.header')

<style>
    /*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog-area {
  height: auto;
  width: 100%;
}

.blog-text h4 a {
  color: #444;
  text-decoration: none;
}

.blog-text h4 {
  color: #444;
  margin-bottom: 15px;
}

.blog-btn {
  border-bottom: 1px dotted #444;
  color: #444;
  text-decoration: none;
}

.blog-btn {
  border-bottom: 1px dotted #444;
  color: #444;
  display: inline-block;
  padding: 0 1px 5px 0;
  position: relative;
  text-decoration: none;
}

.blog-btn {
  position: relative;
}

.blog-btn::after {
  content: "\f178";
  font-family: fontawesome;
  position: absolute;
  right: -20px;
  top: 1px;
  transition: all 0.3s ease 0s;
}

.blog-btn:hover::after {
  right: -30px;
}

.blog-btn:hover {
  color: #333;
  text-decoration: none;
}

.blog_meta span.date_type i {
  margin-left: 5px;
}

.blog-meta span.comments-type {
  margin-left: 5px;
}

.blog-meta span i {
  padding-right: 10px;
}

.blog-content .blog-meta {
  border-bottom: 1px dotted #333;
}

.blog-meta {
  border-bottom: 1px dotted #fff;
  padding: 10px 0;
}

.comments-type > a, .date-type, .blog-meta span.comments-type {
  color: #333;
  letter-spacing: 1px;
  margin-right: 5px;
}

.blog-meta .comments-type i {
  padding-right: 0 !important;
}

.blog-content-right .comments-type > a, .blog-content-right .date-type, .blog-content-right .blog-meta span.comments-type, .blog-content-right .blog-text p {
  color: #fff;
  letter-spacing: 1px;
}

.single-blog .ready-btn {
  border: 1px solid #444;
  border-radius: 30px;
  color: #444;
  cursor: pointer;
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  margin-top: 10px;
  padding: 10px 20px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.single-blog .ready-btn:hover {
  border: 1px solid #3EC1D5;
  color: #fff;
}

/*--------------------------------------------------------------
# Blog page
--------------------------------------------------------------*/
.page-area {
  position: relative;
}

.blog-page .banner-box {
  margin-bottom: 40px;
}

.search-option input {
  border: medium none;
  padding: 2px 15px;
  width: 80%;
}

.search-option {
  border: 1px solid #ccc;
  height: 42px;
  margin-bottom: 30px;
}

.search-option button {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  font-size: 20px;
  padding: 8px 23px;
}

.search-option button:hover {
  color: #3ec1d5;
}

.left-blog h4 {
  border-bottom: 1px solid #ddd;
  color: #444;
  font-size: 17px;
  font-weight: 500;
  margin-bottom: 0;
  padding: 15px 10px;
  text-transform: uppercase;
}

.left-blog {
  background: #f9f9f9 none repeat scroll 0 0;
  margin-bottom: 30px;
  overflow: hidden;
  padding-bottom: 20px;
}

.left-blog li {
  border-bottom: 1px solid #ddd;
  display: block;
}

.left-blog ul li a {
  color: #444;
  display: block;
  font-size: 14px;
  padding: 10px;
  text-transform: capitalize;
}

.recent-single-post {
  border-bottom: 1px solid #ddd;
  display: block;
  overflow: hidden;
  padding: 15px 10px;
}

.ready-btn {
  border: 1px solid #fff;
  border-radius: 30px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-top: 30px;
  padding: 12px 40px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  z-index: 222;
}

.ready-btn:hover {
  color: #fff;
  background: #3EC1D5;
  border: 1px solid #3EC1D5;
  text-decoration: none;
}

.post-img {
  display: inline-block;
  float: left;
  padding: 0 5px;
  width: 35%;
}

.pst-content {
  display: inline-block;
  float: left;
  width: 65%;
}

.pst-content p a:hover, .left-blog ul li a:hover {
  color: #3EC1D5;
}

.blog-page .single-blog {
  margin-bottom: 40px;
}

.pst-content p a {
  color: #444;
  font-size: 15px;
}

.header-bottom h1, .header-bottom h2 {
  color: #fff;
}

.blog-tags {
  padding: 1px 0;
}

.left-blog li:last-child {
  border-bottom: 0;
}

.popular-tag.left-blog ul li a:hover {
  color: #fff;
}

.popular-tag.left-side-tags.left-blog ul {
  padding: 0 10px;
}

.blog-1 .banner-box {
  margin-bottom: 30px;
}

.left-tags .left-side-tags ul li {
  border-bottom: 0;
}

.left-tags .left-side-tags ul li a {
  padding: 3px 10px;
  width: auto;
}

.left-side-tags h4 {
  margin-bottom: 15px;
}

/*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
.post-information h2 {
  color: #363636;
  font-size: 22px;
  text-transform: uppercase;
}

.post-information {
  padding: 20px 0;
}

.post-information .entry-meta span a {
  color: #444;
  display: inline-block;
  padding: 10px 0;
}

.entry-meta span a:hover {
  color: #3EC1D5;
}

.post-information .entry-meta {
  border-bottom: 1px solid #ccc;
  margin: 20px 0;
}

.post-information .entry-meta span i {
  padding: 0 10px;
}

.entry-content > p {
  color: #444;
}

.entry-meta > span {
  color: #444;
}

.entry-content blockquote {
  background: #fff none repeat scroll 0 0;
  border-left: 5px solid #3EC1D5;
  font-size: 17.5px;
  font-style: italic;
  margin: 0 0 20px 40px;
  padding: 22px 20px;
}

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: #3EC1D5;
  border-color: #3EC1D5;
  color: #fff;
  cursor: default;
  z-index: 3;
}

.social-sharing {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #ccc;
  display: block;
  margin: 30px 0;
}

.social-sharing > h3 {
  display: inline-block;
  font-size: 18px;
  margin: 0;
  padding: 20px 10px;
}

.sharing-icon {
  display: inline-block;
  float: right;
  padding: 13px 10px;
}

.sharing-icon a {
  border: 1px solid #444;
  color: #444;
  display: block;
  float: left;
  font-size: 18px;
  height: 34px;
  line-height: 30px;
  margin-left: 10px;
  text-align: center;
  width: 34px;
}

.sharing-icon a:hover {
  color: #3EC1D5;
  border: 1px solid #3EC1D5;
}

.single-blog .author-avatar {
  float: left;
  margin-right: 10px;
}

.single-blog .author-description h2 {
  font-size: 18px;
  margin: 0;
  padding: 0 0 5px;
}

.author-info {
  background: #fff none repeat scroll 0 0;
  float: left;
  margin: 30px 0;
  padding: 15px;
  width: 100%;
}

.single-post-comments {
  margin-bottom: 60px;
  max-width: 650px;
}

.comments-heading h3, h3.comment-reply-title {
  border-bottom: 1px solid #e8e8e9;
  color: #444;
  font-size: 18px;
  margin: 0 0 20px;
  padding: 0 0 5px;
  text-transform: uppercase;
}

.comments-list ul li {
  margin-bottom: 25px;
}

.comments-list-img {
  float: left;
  margin-right: 15px;
}

.comments-content-wrap {
  color: #42414f;
  font-size: 12px;
  line-height: 1;
  margin: 0 0 15px 80px;
  padding: 10px;
  position: relative;
}

.author-avatar {
  display: inline-block;
  float: left;
  width: 10%;
}

.author-description h2 {
  color: #777;
  font-size: 20px;
  text-transform: uppercase;
}

.author-description h2 a {
  color: #000;
}

.comments-content-wrap span b {
  margin-right: 5px;
}

span.post-time {
  margin-right: 5px;
}

.comments-content-wrap p {
  color: #909295;
  line-height: 18px;
  margin-bottom: 5px;
  margin-top: 15px;
}

li.threaded-comments {
  margin-left: 50px;
}

.comment-respond {
  margin-top: 60px;
}

span.email-notes {
  color: #42414f;
  display: block;
  font-size: 12px;
  margin-bottom: 10px;
}

.comment-respond p {
  color: #444;
  margin-bottom: 5px;
}

.comment-respond input[type=text], .comment-respond input[type=email] {
  border: 1px solid #e5e5e5;
  border-radius: 0;
  height: 32px;
  margin-bottom: 15px;
  padding: 0 0 0 10px;
  width: 100%;
}

.comment-respond textarea#message-box {
  border: 1px solid #e5e5e5;
  border-radius: 0;
  max-width: 100%;
  padding: 10px;
  height: 130px;
  width: 100%;
}

.comment-respond input[type="submit"] {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid #3ec1d5;
  border-radius: 20px;
  box-shadow: none;
  color: #444;
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  height: 40px;
  line-height: 14px;
  margin-top: 20px;
  padding: 10px 15px;
  text-shadow: none;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
}

.comments-content-wrap span a {
  color: #000;
}

.comments-content-wrap span a:hover {
  color: #3EC1D5;
}

.comment-respond input[type=submit]:hover {
  border: 1px solid #3EC1D5;
  color: #fff;
  background: #3EC1D5;
}

.single-blog .blog-pagination {
  border-top: 1px solid #e5e5e5;
  margin: 0;
  padding-top: 30px;
}

    
</style>
  
  <div class="site-wrap">
   

    <div class="bg-light py-3 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{route('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{route('blog')}}">Blog</a></div>
        </div>
      </div>
    </div>

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="page-head-blog">

              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">

                    @foreach($blogs as $blog)
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="#">
                          <img src="{{asset('front/blog/').'/'.$blog->image}}" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="{{route('blog-details',$blog->slug)}}"> {{substr(strip_tags($blog->content),0,30)}}.</a></p>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                </div>
                <!-- recent end -->
              </div>

            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
            @foreach($blogs as $blog)    
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.php">
                      <img src="{{asset('front/blog/').'/'.$blog->image}}" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">

                    <span class="date-type">
                      <i class="fa fa-calendar"></i>{{$blog->created_at}}
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#">{{$blog->title}}</a>
                    </h4>
                    <p>
                     {{substr(strip_tags($blog->content),0,150)}}
                    </p>
                  </div>
                  <span>
                    <a href="{{route('blog-details',$blog->slug)}}" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
            @endforeach  
              
              
              

              
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  
  </div>
@include('front.footer')