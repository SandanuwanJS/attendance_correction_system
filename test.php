<html>
<head>
   <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity = "sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin = "anonymous" referrerpolicy = "no-referrer"></script>
</head>
<body>
   <h2>Using <i>jQuery </i> to check if the file input is empty or not</h2>
   <input type = "file" id= "fileInput" /><br /><br />
   <button id = "click" onClick = "validateFileInput()"> Click me </button>
   <p id = "output"> </p>
   <script>
      let output = document.getElementById("output");
      function validateFileInput() {
         let files = $("#fileInput")[0].files.length;
         alert(files)
         if (files != 0) {
            output.innerHTML += "File is selected! <br/>";
         } else {
            output.innerHTML += "Please, select a file!<br>";
         }
      }
   </script>
</body>
</html>