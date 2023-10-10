<?php
function showProfilePage() {
    global $base_url;
    $title = 'Profile';
    $css = 'css/style_profile.css';
    $js = false;

    ob_start();
?>
    <main>
        <div class="see-info">
            <h2>Profile</h2>
    
            <p class="username"><?= $_SESSION['user']['username'] ?></p>
    
            <p class="mail"><?= $_SESSION['user']['mail'] ?></p>
    
            <p class="birthday"><?= date('d F Y', strtotime($_SESSION['user']['birthday'])); ?></p>
    
            <button id="btnModify">Modify</button>
        </div>

        <div class="modify-info">
            <h2>Modify informations</h2>
    
            <form method="post">
                <div>
                    <p>Gender</p>

                    <div>
                        <label for="genderDefault">Default</label>
                        <input type="radio" name="gender" id="inputGenderDefault" value="Default" checked>
                    </div>

                    <div>
                        <label for="genderMan">Man</label>
                        <input type="radio" name="gender" id="inputGenderMan" value="Man">
                    </div>

                    <div>
                        <label for="genderWoman">Woman</label>
                        <input type="radio" name="gender" id="inputGenderWoman" value="Woman">
                    </div>
                </div>

                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="inputUsername">
                </div>

                <div>
                    <label for="mail">Mail</label>
                    <input type="mail" name="mail" id="inputMail">
                </div>

                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="inputBirthday">
                </div>

                <div>
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" id="inputConfirmPassword" required>
                </div>

                <input type="submit" value="Confirm modify">
            </form>
        </div>
    </main>
<?php 
    $content = ob_get_clean();
    require "layout.php";
}
?>