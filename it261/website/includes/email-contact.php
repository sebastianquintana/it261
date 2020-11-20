


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <fieldset>
        <label>Name</label>
        <input type="text" name ="firstName" value="<?php
        if(isset($_POST['firstName'])) echo  htmlspecialchars($_POST['firstName']) ; ?>">
        <span><?php echo $firstNameErr ; ?></span>
        <label>Last Name</label>
        <input type="text" name ="lastName" value="<?php
        if(isset($_POST['lastName'])) echo  htmlspecialchars($_POST['lastName']) ; ?>">
        <span><?php echo $lastNameErr ; ?></span>
        <label>Email</label>
        <input type="text" name ="email" value="<?php
        if(isset($_POST['email'])) echo  htmlspecialchars($_POST['email']) ; ?>">
        <span><?php echo $emailErr ; ?></span>

        <label>Phone number</label>
        <input type="text" name ="tel" placeholder="xxx-xxx-xxxx" value="<?php
        if(isset($_POST['tel'])) echo  htmlspecialchars($_POST['tel']) ; ?>">
        <span><?php echo $telErr ; ?></span>
            
            <br>
            
            <label>Gender</label>
        <ul>
            <li><input type="radio" name="gender"  value="female"
            <?php if(isset($_POST['gender']) && $_POST['gender']=='female') echo 'checked="checked"';?>
            >Female</li>
            <li><input type="radio" name="gender" value="male"
            <?php if(isset($_POST['gender']) && $_POST['gender']=='male') echo 'checked="checked"';?>
            >Male</li>
            </ul>
            <span><?php echo $genderErr ; ?></span>

            <label>Favorite wine</label>
        <ul>
            <li><input type="checkbox" name="wines[]" value="Cabernet"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Cabernet') echo 'checked="checked"';?>
            >Cabernet</li>
            <li><input type="checkbox" name="wines[]" value="Merlo"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Merlo') echo 'checked="checked"';?>
            >Merlo</li>
            <li><input type="checkbox" name="wines[]" value="Carmenere"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='Carmenere') echo 'checked="checked"';?>
            >Carmenere</li>
            <li><input type="checkbox" name="wines[]" value="verdhe"
            <?php if(isset($_POST['wines']) && $_POST['wines']=='verdhe') echo 'checked="checked"';?>
            >vino verdhe</li>

        </ul>
        <span><?php echo $winesErr ; ?></span>
        <label>Comments</label>
        <textarea name="comments">
            <?php
             if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;
            ?>
        </textarea>
        <span><?php echo $commentsErr; ?></span>
        
        <input type="radio" name = "privacy" value="
        <?php
        if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']) ; 
        ?>">
        I agree to your Privacy Policy
        <span><?php echo $privacyErr ; ?></span>
        <input type="submit" value="Send it!!">
        <p><a href="">Reset</a></p> 
</fieldset>

    </form>

   
    