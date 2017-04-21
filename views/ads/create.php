<body>
    <?php
    if(isset($_POST['submit_ad'])) {
        var_dump($_SESSION['errors']);
    }
    ?>
    <article class="create-ad">
        <div class="create-ad-input-header">
            <h3>Post an Ad</h3>
        </div>
    </article>
    <article class="create-ad">
        <div class="create-ad-input-container">
            <form method="POST" action="" enctype="multipart/form-data">
                <select name="category" class="create-ad-select">
                    <option value="default">--Category--</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="automobiles">Automobiles</option>
                    <option value="foods">Foods</option>
                </select>

                <select name="condition" class="create-ad-select">
                    <option value="">--Condition--</option>
                    <option value="brand new">Brand New</option>
                    <option value="new">New</option>
                    <option value="like new">Like New</option>
                    <option value="used">Used</option>
                </select>

                <input type="text" class="create-ad-input" value="" name="product_name" placeholder="Item Name">

                <input type="text" class="create-ad-input" value="" name="price" placeholder="List Price">

                <textarea class="create-ad-input" value="" name="description" placeholder="Description"></textarea>

                <input type="text" class="create-ad-input" value="" name="phone" placeholder="Phone Number">

                <input type="text" class="create-ad-input" value="" name="email" placeholder="Email">

                <input type="file" class="create-ad-input" name="image_filename" accept="image/gif, image/jpeg, image/png">

                <button type="submit" class="submit-ad" name="submit_ad">Submit</button>
            </form>
        </div>
    </article>
</body>