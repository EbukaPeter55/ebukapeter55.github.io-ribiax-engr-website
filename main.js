document.getElementById('sendMessage').addEventListener('submit', sendMessage);


        // A function/Method to send message through the contact form
        function sendMessage(e){
            e.preventDefault();

            let name = document.getElementById('name').value;            
            let email = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;
            let message = document.getElementById('message').value;
          

            fetch('https://ribiax.com/api/public/contact', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'content-type': 'application/json'
                },
                body:JSON.stringify({name:name, phone:phone, 
                 email: email, message: message})
            })
            .then((res) => res.json())
            .then((data) => console.log(data),
            localStorage.setItem('email', email))           
            .then(
                (data) => Swal.fire({                   
                    icon: 'success',
                    title: 'Message sent successfully',
                    showConfirmButton: false,
                    timer: 1500,                    
                  })          
                )
                .catch( error => {
                    console.warn('Something went wrong.', error)
                });
        }
