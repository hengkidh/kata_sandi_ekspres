function salin() {
    var copyText = document.getElementById("kolom");
  
    copyText.select(); 
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
    navigator.clipboard.writeText(copyText.value);
  }

function reload() {
    location.reload();
}