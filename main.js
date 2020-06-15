document.getElementById('sendMessage').addEventListener('submit', sendMessage);


        // A function/Method to send message through the contact form
        function sendMessage(e){
            e.preventDefault();

            let name = document.getElementById('name').value;            
            let email = document.getElementById('email').value;
            let organization = document.getElementById('organization').value;
            let message = document.getElementById('message').value;
          

            fetch('https://gudlifeapi.gudlifetech.com/api/public/contact', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'content-type': 'application/json'
                },
                body:JSON.stringify({name:name, organization:organization, 
                 email: email, message: message})
            })
            .then((res) => res.json())
           
            .then(
                (data) => alert("Message sent successfully!!")            
                )
                .then((error)=> 
                    console.log(error)
                );
        }
