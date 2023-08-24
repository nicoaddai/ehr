<html>
<head>
 <title>Electronic Health Records: List</title>
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
  <h1>Record list</h1>
   <table>
    <tr><td>Record names/IDs</td>
    <td>Record information</td>
    <td><button>More details</button></td>
    <td><button onclick="myFunction()">Copy record</button></td>
    <td><button>Edit record</button></td>
    <td><button>Delete record</button></td>
   </table>
  <hr>
 </main>
</body>
</html>