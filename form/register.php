<?php

require 'database.php';

$message = '';

    if (!empty($_POST['submit'])):
        if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['phone'])):
            $message = 'All field are required!!';
        endif;
        var_dump($_POST['firstName'].$_POST['lastName'].$_POST['email'].$_POST['phone']);
    // Enter the new user in the database
    $sql = 'INSERT INTO client (firstName, lastName, email, phone) VALUES (:firstName, :lastName, :email, :phone)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':firstName', $_POST['firstName']);
    $stmt->bindValue(':lastName', $_POST['lastName']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':phone', $_POST['phone']);

    if ($stmt->execute()):
        $message = 'Successfully created new user';
        header('Location: '.'../form/index.php');
    else:
        $message = 'Sorry there must have been an issue creating your account';
    endif;
endif;
?>


<html>

<head>
    <title>
        Demo PHP base form
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="../form/css/default.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../form/css/center.css">
</head>

<body>
    <h3 class="form_state_success">Leave your information and get one pizza free now !!</h3>
    <form method="post" action="register.php" class="form">
        <div class="form_title">First Name</div>
        <label>
            <input type="text" name="firstName" value="Linh">
        </label>
        <div class="form_clear"></div>
        <div class="form_title">Last Name</div>
        <label>
            <input type="text" name="lastName" value="">
        </label>
        <div class="form_clear"></div>
        <div class="form_title">Email</div>
        <label>
            <input type="text" name="email" value="">
        </label>
        <div class="form_clear"></div>
        <div class="form_title">Phone Number</div>
        <label><input type="text" name="phone" value="">
            <div class="form_help">We'll send you a quick reminder the day before the event!</div>
        </label>
        <div class="form_clear"></div>
        <div class="form_title">Your favor</div>
        <select name="form_race">
            <option value="terran">Seafood</option>
            <option value="protoss">Beef</option>
            <option value="zerg">Pork</option>
            <option value="random">Vegaterian</option>
        </select>
        <div class="form_clear"></div>
        <div class="form_title">Preferred Beverage</div>
        <div class="form_radiobox">
            <label><input type="radio" name="form_beverage" value="0" checked="checked"> Coffee</label>
            <label><input type="radio" name="form_beverage" value="1"> Tea</label>
            <label><input type="radio" name="form_beverage" value="2"> Cocacola</label>
        </div>
        <div class="form_clear"></div>
        <div class="form_title">Suggestion Box</div>
        <textarea name="form_suggestions" rows="3" cols="30"></textarea>
        <div class="form_help">Have your voice heard!</div>
        <div class="form_clear"></div>
        <div class="form_title"></div>
        <div style="float: left; margin-bottom: 2px;">
            <label><input type="checkbox" name="form_notify" checked="checked">Notify me of future events in my
                area.</label>
        </div>
        <div class="form_clear"></div>
        <?php if (!empty($message)): ?>
        <p class="form_error"><?= $message; ?></p>
        <?php endif; ?>
        <input type="submit" name="submit" value="Submit Form" class="form_submit">
    </form>
    </div>
</body>

</html>