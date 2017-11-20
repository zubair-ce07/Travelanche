<?php
$session_data = $this->session->userdata('logged_in');
?>
<html>
<head>
<title>Admin Page</title>
</head>
<body>
<div id="profile">
<?php
echo "Hello <b id='welcome'><i>" . $session_data['email'] . "</i> !</b>";
echo "Welcome to Admin Page";
?>
</div>
<b id="logout"><a href="logout">Logout</a></b>
</body>
</html>