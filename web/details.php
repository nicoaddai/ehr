<html>
<head>
<title>Electronic Health Records: Details</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<script language="javascript" type="text/javascript">
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("record");

  // Select the text field
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

}
</script>
<?php include 'nav.php';?>
    <main>
    <h1>Record details</h1>
        <table>
        <tr><td>Record name/ID</td>
        <td>Basic information</td>
        <td>Additional information</td></tr>
        <tr><td><button onclick="myFunction()">Copy record</button></td>
        <td><button>Edit</button></td>
        <td><button>Delete</button></td></tr>
        </table>
    <hr>
    </main>
</body>
</html>