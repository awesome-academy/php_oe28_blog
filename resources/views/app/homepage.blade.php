@extends('layouts.app')

@section('main_content')
    <div class="jl_post_loop_wrapper jl_grid_4col_home">
        <div class="container" id="wrapper_masonry">
            <div class="row">
                <div class="col-md-12 grid-sidebar">
                    <div class="jl_wrapper_cat">
                        <div id="content_masonry">
                            <!-- data test -->
                            @for ($i = 1; $i < 9; $i++)
                            <div class="box jl_grid_layout1 blog_grid_post_style post-4761 post type-post status-publish format-standard has-post-thumbnail hentry category-sports" data-aos="fade-up">
                                <div class="post_grid_content_wrapper">
                                    <div class="image-post-thumb">
                                        <a href="#" class="link_image featured-thumbnail" title="Round white dining table on brown hardwood">
                                            <img width="780" height="450" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2019/02/roberto-nickson-1299738-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" />         <div class="background_over_image"></div>
                                        </a>
                                        <span class="meta-category-small">
                                            <a class="post-category-color-text" href="#">Sports</a>
                                        </span>
                                    </div>
                                    <div class="post-entry-content">
                                        <div class="post-entry-content-wrapper">
                                            <div class="large_post_content">
                                                <h3 class="image-post-title"><a href="#">Bàn ăn tròn màu trắng trên gỗ cứng màu nâu</a></h3>
                                                <span class="jl_post_meta">
                                                    <span class="jl_author_img_w">
                                                        <a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
                                                    </span>
                                                    <span class="post-date"><i class="fa fa-clock-o"></i>Mar 10, 2019</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <nav class="jellywp_pagination">
                        <ul class="page-numbers">
                          <li><span aria-current="page" class="page-numbers current">1</span></li>
                          <li><a class="page-numbers" href="#">2</a></li>
                          <li><a class="page-numbers" href="#">3</a></li>
                          <li><span class="page-numbers dots">&hellip;</span></li>
                          <li><a class="page-numbers" href="#">6</a></li>
                          <li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                    </nav>
                    <!--end data test -->
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
@endsection
