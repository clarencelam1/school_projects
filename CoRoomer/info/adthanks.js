function open_win(){
window.open("http://www.coroomer.com/michael/consumer","_blank","toolbar=yes, location=no, directories=no, status=1, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=450, height=500");
}

function thanks(){
   confirm("You ad has been created.\nPlease check the apartments page to see your posting.")   
   parent.close();
}

function incorrect(){
   confirm("The coupon code you entered was invalid.")   
   parent.close();
}

function updated(){
   confirm("Your ad has been successfully updated.")   
   parent.close();
}