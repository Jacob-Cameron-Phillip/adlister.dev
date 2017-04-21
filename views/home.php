<div class="background-grey">
<?php
if($loggedIn) {
    echo "Hello " . ucwords(Auth::user()->name) . "!";
} else {
    echo "Hello guest!";
}

?>
    <div id="featuredItemsBox">
        <center><h2 class="section-title">Check Out Our Featured Items</h2></center>
        <div id="w">                    
            <div class="crsl-items" data-navigation="navbtns">
            <div class="crsl-wrap">
            <?php foreach(Post::allRows(4) as $post): ?>
                <div class="crsl-item">
                <div class="thumbnail">
                    <img src="<?php echo $post->image_filename; ?>" alt="<?php echo $post->category; ?>">
                    <span class="postdate"><?php echo ucwords($post->condition); ?></span>
                </div>
                
                <h3><a href="#"><?php echo $post->product_name; ?></a></h3>
                
                <p><?php echo substr($post->description, 0, 104) . "..."; ?></p>
                
                <p class="readmore"><a href="#">Read More &raquo;</a></p>
                </div><!-- post #1 -->
            <?php endforeach; ?>

            </div><!-- @end .crsl-wrap -->
            </div><!-- @end .crsl-items -->
            <nav class="slidernav">
            <div id="navbtns" class="clearfix">
                <a href="#" class="previous">prev</a>
                <a href="#" class="next">next</a>
            </div>
            </nav>
        </div><!-- @end #w -->
    </div>

    <hr class="style13">
    </div>
    <div class="recentlyAdded">
        <h1 class="section-title latestPosts">Latest Posts</h1>
        
        <div class="recentlyAddedCategories">
            <div class="adsContainer">
                <div id="ads1"></div>
                <div id="ads2"></div>
            </div>
            <div id="postContainer">
                <div class="postTitleHeader">Title & Description</div>
                <div class="postHeaderPrice">Price</div>    
                <div class="postHeaderDate">Date Posted</div>
            </div>
            <?php foreach (Post::allRows(5) as $post): ?>
                <div id="postContainer">
                    <div class="postThumbnail"><?php echo $post->image_filename; ?></div>
                    <div class="postTitle "><?php echo $post->product_name; ?></div>
                    <div class="postDescription"><?php echo $post->description; ?></div>
                    <div class="postPrice">$<?php echo number_format($post->price, 2); ?></div>
                    <div class="postDate"><?php echo $post->date_added; ?></div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="emptyClass">
        <div class="emptyLayout">
            <!--  add hover feature that .fadeIn a class that has an all white box with information about creating an effective listing  -->
            <center><h4>Tips To Success</h4></center>
        </div>
        <div class="emptyLayout">
            <center><h4>What Makes Us Different?</h4></center>
        </div>
        <div class="emptyLayoutLarge">
            <!-- add in a section after each user closes out a listing with radio buttons asking if the user made the sale or not - have a "rewards Program" if the seller is the top seller for the month (I.E. Free $10 amazon gift card OR Free $10 credit towards their next purchase the site)
            Pay Pal needs to be set up in order for "SELLER OF THE MONTH" to get credited $10 towards their next purchase -->
            <center><h3>Seller Of The Month</h3></center>
        </div>
    </div>

    <section class="footer">
        <div class="contactContainer">
            <div id="email"></div>
            <div id="phone"></div>
            <div id="location"></div>
        </div>
    </section>