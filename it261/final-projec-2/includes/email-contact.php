


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
            
            <label>How do you found Us</label>
        <ul>
            <li><input type="radio" name="findUs"  value="Online"
            <?php if(isset($_POST['findUs']) && $_POST['findUs']=='Online') echo 'checked="checked"';?>
            >Online</li>
            <li><input type="radio" name="findUs" value="market"
            <?php if(isset($_POST['findUs']) && $_POST['findUs']=='market') echo 'checked="checked"';?>
            >market</li>
            </ul>
            <span><?php echo $find_us_Err ; ?></span>

            <label>Your Favorite Flavors</label>
        <ul>
            <li><input type="checkbox" name="alfajores[]" value="Classic"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='Clasicc') echo 'checked="checked"';?>
            >Classic</li>
            <li><input type="checkbox" name="alfajores[]" value="Almond"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='Almomd') echo 'checked="checked"';?>
            >Almond</li>
            <li><input type="checkbox" name="alfajores[]" value="Maicena"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='Maicena') echo 'checked="checked"';?>
            >Maicena</li>
            <li><input type="checkbox" name="alfajores[]" value="Peanut-butter"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='Peanut-butter') echo 'checked="checked"';?>
            >Peanut Butter</li>
            <li><input type="checkbox" name="alfajores[]" value="Orange"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='Orange') echo 'checked="checked"';?>
            >holidays</li>
            <li><input type="checkbox" name="alfajores[]" value="holidays"
            <?php if(isset($_POST['alfajores']) && $_POST['alfajores']=='holidays') echo 'checked="checked"';?>
            >holidays</li>


        </ul>
        <span><?php echo $alfajoresErr ; ?></span>
        <label>Comments</label>
        <textarea name="comments">
        <?php
            if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;
        ?>
        </textarea>
        <span><?php echo $commentsErr; ?></span>
        <input type="submit" value="Send it!!">
        <p><a href="">Reset</a></p> 
</fieldset>

    </form>

   
    