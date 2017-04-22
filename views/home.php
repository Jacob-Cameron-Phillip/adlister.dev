<div class="background-grey">
<?php
if($loggedIn) {
    // echo "Hello " . ucwords(Auth::user()->name) . "!";
} else {
    // echo "Hello guest!";
}
?>
    <div id="featuredItemsBox">
        <center><h2 class="section-title">Featured Items</h2></center>
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
            <table>
            <caption>Product Information</caption>
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Description</th>
                <th scope="col">Post Price</th>
                <th scope="col">Date Added</th>
                </tr>
            </thead>
            <tbody>
        <?php foreach (Post::allRows(5) as $post): ?>
                <tr>
                <th scope="row">
                    <img src="<?php echo $post->image_filename; ?>" style="width: 60px; height: 60px;" class"img">
                </th>
                <td><?php echo $post->product_name; ?></td>
                <td><?php echo $post->description; ?></td>
                <td>$<?php echo number_format($post->price); ?></td>
                <td><?php echo $post->date_added; ?></td>
                </tr>
        <?php endforeach ?>
            </tbody>
            </table>
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