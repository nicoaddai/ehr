<script language="javascript" type="text/javascript">
function myFunction() {
  var copyText = document.getElementById("record");

  copyText.select(); 
  copyText.setSelectionRange(0, 99999); // For mobile devices
  navigator.clipboard.writeText(copyText.value);
}
</script>