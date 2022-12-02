-- Download the zip-archive branch master.// -- Go to the panel file manager. -- In the file manager, put the files from the downloaded branch/folder sidepiece.com into the sidepiece.com folder.

Database server

Server: Localhost via UNIX socket Server type: MySQL Server connection: SSL is not being used Documentation Server version: 5.7.39-cll-lve - MySQL Community Server - (GPL) Protocol version: 10 User: cpses_p1w82o9vc3@localhost Server charset: cp1252 West European (latin1)

Web server

cpsrvd 11.102.0.19 Database client version: libmysql - mysqlnd 7.4.30 PHP extension: mysqliDocumentation curlDocumentation mbstringDocumentation PHP version: 7.4.30

phpMyAdmin

Version information: 4.9.7

Database access

Login: usersAlphaDating Password: \*6iu3+[HT!7?

Example of the request (This part of the code is inserted from the very top of the file index.php in the folder sidepiece.com). 0)
 <?php
$dbh = new PDO('mysql:host=localhost;dbname=usersAlphaDating;charset=utf8;', 'usersAlphaDating', '*6iu3+[HT!7?');
if (count($_POST) > 0) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $report_message = htmlspecialchars(trim($_POST['report_message']));
    $report_second = htmlspecialchars(trim($_POST['report_second']));

    if (!empty($report_second)) {
        $sql = "INSERT INTO `sidepiece-reports` (`report_message`) VALUES ( :report_message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':report_message' => $report_second));
        $result = $sth->fetchAll();
    }
    if (!empty($report_message)) {
        $sql = "INSERT INTO `sidepiece-reports` (`report_message`) VALUES (:report_message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':report_message' => $report_message));
        $result = $sth->fetchAll();
    }
    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO `sidepiece-users` (`name`, `email`, `message`) VALUES (:name, :email, :message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':name' => $name, ':email' => $email, ':message' => $message));
        $result = $sth->fetchAll();
    }
} ?>
