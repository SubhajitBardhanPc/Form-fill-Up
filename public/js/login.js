document.addEventListener('DOMContentLoaded',function(){
    document.getElementById('loginFrom').addEventListener('submit',function(e){
        e.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
         // Display the values in the console (for testing purposes)
         console.log('Email:', email);
         console.log('Password:', password);
         fetch('/login',{
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
            },
            body:JSON.stringify({email,password}),
         })
         .then(response=>response.JSON())
         .then(data=>{
            console.log('Server Response',data);
            if (data.success) {
                alert('Login successful!');
                window.location.href = '/dashboard'; // Redirect on success
            } else {
                alert('Login failed. Please check your credentials.');
            }
            
         })
         .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
});