function openForm() {
    document.getElementById("myForm").style.display = "block";
   
  }
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

function magicBus() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("bus").style.display = "block";

}
function book() {
 
  document.getElementById("bus").style.display = "none";
  document.getElementById("myForm").style.display = "block";
}

function valid() {
  let id1=document.getElementById("id1").value;
  let id2=document.getElementById("id2").value;
  let id3=document.getElementById("id3").value;
  let id4=document.getElementById("id4").value;
  let id5=document.getElementById("id5").value;
  let id6=document.getElementById("id6").value;
  let paymagic=document.getElementById("paymagic").value;
  if(id1=="")
  {
    alert("enter a first name");
      return false;
  }
  else if(id2=="") 
  {
    alert("enter a last name");
    return false;
  }
  else if(id3=="") 
  {
    alert("enter a email adress");
    return false;
  }
  else if(id4=="")
  {
    alert("enter 10 digits mobile number");
      return false;
  }
  else if(id5=="")
  {
      alert("enter a date");
      return false;
  }
  else if(id6=="")
  {
      alert("enter a adress");
      return false;
  }
  else{
      alert("Your data is successfully submitted");
      return true;
  }


}


