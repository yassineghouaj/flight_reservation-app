function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  

  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  


  function show() {
    if (document.getElementById("simple").checked) {
      document.getElementById("redate").style.display = "none";
    } else if (document.getElementById("alretour").checked) {
      document.getElementById("redate").style.display = "block";
    }
  }