<?php get_header(); ?>

<h4>مرحبا بكم في دوري سعودي</h4>
<div class="container">
    <div class="row">
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();

?>

<div class="col-sm-6">
    <div class="main-post">
            <?php the_title('<h3 class="post-title">','</h3>');?>
                <span class="post-author"><?php  the_author_posts_link();   ?>,</span>
                <span class="post-date"><?php the_time(); ?></span>
                <span class="post-comments"><?php comments_popup_link(); ?></span>
                <?php the_post_thumbnail('thumbnail'); ?>
                <?php the_content(); ?>
                <hr>
                <p class="categor-ies"><?php the_category('  '); ?></p>
    </div>
</div>




<?php
        }
    }
    //comments_popup_link()
?>
</div>
</div>






        
                <h3 class="post-title">قاعدين نطبق مع احد الفيديوهات</h3>
                
                
                <img class="img-responsive img-thumbnail" src="https://i.pinimg.com/236x/6e/91/f3/6e91f335535ac4e82668928cea4c1a73.jpg" alt="" width="500px" height="300px">
                <p class="post-content"> نصر عم الجميع </p>
                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">قاعدين نطبق مع احد الفيديوهات</h3>
                <span class="post-author">يوسف</span>
                <span class="post-date">1444\3\25</span>
                <span class="post-comments">5 Comments</span>
                <img class="img-responsive img-thumbnail" src="https://i.pinimg.com/236x/93/7b/df/937bdf0d9e00cb8c4b5e062a946d7a94.jpg" alt="" width="500px" height="300px">
                <p class="post-content"> مدلل صندوق </p>
                <hr>
                <p class="categor-ies">نجرب قاعدين نستخدم html and css و راح نستخدم مستقبلا php</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">قاعدين نطبق مع احد الفيديوهات</h3>
                <span class="post-author">يوسف</span>
                <span class="post-date">1444\3\25</span>
                <span class="post-comments">5 Comments</span>
                <img class="img-responsive img-thumbnail" src="https://i.pinimg.com/236x/fd/81/93/fd8193cd1c3fda7cf249089887cfcd41.jpg" alt="" width="500px" height="300px">
                <p class="post-content"> احد اندية دوري روشن العريقة </p>
                <hr>
                <p class="categor-ies">نجرب قاعدين نستخدم html and css و راح نستخدم مستقبلا php</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">قاعدين نطبق مع احد الفيديوهات</h3>
                <span class="post-author">يوسف</span>
                <span class="post-date">1444\3\25</span>
                <span class="post-comments">5 Comments</span>
                <img class="img-responsive img-thumbnail" src="https://i.pinimg.com/236x/c3/f4/d9/c3f4d9acf29c3a2a868344cceb1e09f9.jpg" alt="" width="500px" height="300px">
                <p class="post-content"> ايضا احد اندية روشن العريقة </p>
                <hr>
                <p class="categor-ies">نجرب قاعدين نستخدم html and css و راح نستخدم مستقبلا php</p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
