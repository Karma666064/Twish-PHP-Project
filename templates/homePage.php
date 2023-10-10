<?php
function showHomePage() {
    global $base_url;
    $title = 'Home';
    $css = 'css/style_home.css';
    $js = false;

    ob_start();
?>
    <main>
        <h2>Twish</h2>
        
        <div class="separator"></div>

        <div class="create-post">
            <h2>Create a post</h2>

            <form method="post">
                <div>
                    <label for="textarea">Text</label>
                    <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                </div>

                <input type="hidden" name="formType" value="createPost">
                
                <input type="submit" value="Create">
            </form>
        </div>
        
        <section class="Posts">
            <?= showPosts(); ?>
        </section>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>