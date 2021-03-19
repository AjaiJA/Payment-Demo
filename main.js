function checkValidation(e){
    let method=document.querySelector('#payment').value;
    let cardName=document.querySelector('#name').value;
    let cardNumber=document.querySelector('#number').value;
    let expiryDate=document.querySelector('#expiry').value;
    let cvvCode=document.querySelector('#cvv-code').value;
    if(method=="" || cardName=="" || cardNumber=="" || expiryDate=="" || cvvCode==""){
        alert("Field is Empty");
        e.preventDefault();
    }
    else{
        if(cardName.match(/^[A-Za-z ]+$/))
        {
            if(isNaN(cardNumber)){
                alert("Enter Only Numbers");
                e.preventDefault();
            }
            else{
                if(cvvCode.match(/^\d{6}$/)){
                    document.querySelector('form').setAttribute('action','./operations.php');
                }
                else{
                    alert("Enter only Six(6) Numbers for CVV Code");
                    e.preventDefault();
                }
            }
        }
        else{
            alert("Enter Character for Card Name");
            e.preventDefault();
        }
    }
}