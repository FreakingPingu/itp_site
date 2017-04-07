<?php
if($_POST["submit"]) {
    $recipient="masterricky3333@gmail.com";
    $subject="Request for Information";
    $senderFirst=$_POST["SenderFirstName"];
    $senderLast=$_POST["SenderLastName"];
    $senderEmail=$_POST["SenderEmail"];
    $message=$_POST["SenderInfoReason"];

    $mailBody="Name: $senderFirst $senderLast\nEmail: $senderEmail\n\n$message"; // Creates the message itself, with newline characters

    mail($recipient, $subject, $mailBody, "From: itp.info.request@excellitp.com"); // Sends it to master..., appearings to come from itp.info...

    $confirmedSent="<p> Your request was received. Please allow several days for a response. </p>"; // New paragraph appears under submit button telling user it was received.
}
?>

<!DOCTYPE HTML>

<html>

    <head>
        <meta charset="utf-8">
        <title> Contact Us </title>
        <link href="../styles.css" rel="stylesheet" type="text/css" />
        <style>
            form {
                width: 45%;
                margin-left: auto;
                margin-right: auto;
                background-color: #c3c3c3;
                padding: 2%;
            }

            label {
                    display: block;
                    margin: 2em;
            }
        </style>

    </head>

    <body>

		<div class = image>
        	<img src = "assets/ITP_LOGO.png" alt = "ITP logo" height = "81" width = "144">
        </div>

        <ul> <!-- Nav bar menu -->
            <li><a href = "../index.html"> Home </a></li>
            <li><a href = "../senior/senior.html"> Senior </a></li>
            <li><a href = "../junior/junior.html"> Junior </a></li>
            <li><a href = "../photos/photos.html"> Photos </a></li>
            <div class = "dropdown">
            	<li> Questions and Concerns </li>
                <div class = "dropdown-content">
                	<a href = "../faq/faq.html"> FAQ </a>
                    <a href = "../faq/faq.html"> Recruitment Information </a>
                    <a href = "../about/about.html"> About Us </a>
                    <a href = "../contact/contact.html"> Contact Us </a>
               	</div>
            </div>
            <div class = "dropdown">
            	<li> External Links </li>
                <div class = "dropdown-content">
                	<a href = "http://www.skillsusa.org/" target = "_blank"> Skills USA </a>
                    <a href = "#" target = "_blank"> College Credit & Scholaarships </a>
                </div>
            </div>
			<li class = "menu">
            	<a href="#menu"> &#9776;</a>
                <div class = "dropdown-content">
                	<a href = "../index.html"> Home </a>
                    <a href = "../senior/senior.html"> Senior </a>
                    <a href = "../junior/junior.html"> Junior </a>
                    <a href = "../photos/photos.html"> Photos </a>
                    <a href = "../faq/faq.html"> FAQ </a>
                    <a href = "../faq/faq.html"> Recruitment Information </a>
                    <a href = "../about/about.html"> About Us </a>
                    <a href = "../contact/contact.html"> Contact Us </a>
                    <a href = "http://www.skillsusa.org/" target = "_blank"> Skills USA </a>
                    <a href = "#" target = "_blank"> College Credit & Scholaarships </a>
                </div>
            </li>
        </ul>

        <form name="form" action="contact.php" method="post" > <!-- User submitted form for an information request. Calls the PHP code at the start of the file. -->
            <h1> Request for Information </h1>
            <label> First Name:<input type="text" name="SenderFirstName" /></label>
            <label> Last Name:<input type="text" name="SenderLastName" /></label>
            <label> Email:<input type="text" name="SenderEmail" /></label>
            <textarea name="SenderInfoReason" rows="7" cols="60"></textarea>
            <input type="submit" name="submit"/>
            <?=confirmedSent ?> <!-- Hidden paragraph that will appear when the user submits the form, using PHP code at start of file -->
        </form>

    </body>

</html>
