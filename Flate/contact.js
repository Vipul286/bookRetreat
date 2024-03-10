function valid()
 {
  let nm=document.getElementById("nm").value;
  let em=document.getElementById("em").value;
  let mb=document.getElementById("mb").value;
  let ad=document.getElementById("ad").value;
  if(nm=="")
  {
    alert("enter a name");
      return false;
  }
  else if(em=="") 
  {
    alert("enter a email adress");
    return false;
  }
  else if(mb=="") 
  {
    alert("enter 10 digits mobile number");
    return false;
  }
  else if(ad=="")
  {
      alert("enter a adress");
      return false;
  }
  else{
      alert("Your data is successfully submitted");
      return true;
  }

}
