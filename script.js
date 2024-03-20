document.getElementById('contactForm').addEventListener('submit',function(event){
    if(!validateForm()){
        event.preventDefault();
        alert('please fill all the fileds.');
    }
    else{
        document.getElementById('conformationMessage').style.display='block';
    }
});
function validateForm(){
    var name= document.getElementById('name').value;
    var email= document.getElementById('email').value;
    var mobile= document.getElementById('mobile').value;
    var message= document.getElementById('message').value;

    if(name.trim()===''||email.trim()===''||mobile.trim()===''||message.trim()===''||){
        return false;
    }
    return true;
}