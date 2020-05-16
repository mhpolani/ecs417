    
    
    const titleError = document.getElementById("title_error");
    const bodyError = document.getElementById("body_error");
    const title = document.getElementById('title');
    const body = document.getElementById('body');
    const form = document.getElementById('myForm');
    const clear = document.getElementById('clear-post');
    
    form.addEventListener('submit', function prevent(event){
        if (title.value != '') 
        {
            title.style.border = "1px solid green";
            titleError.innerHTML = "";
        }
        if (body.value != '') 
        {   
            body.style.border = "1px solid green";
            bodyError.innerHTML = "";
        }
        if (title.value == '') 
    	{
    	event.preventDefault();
    	title.style.border = "1px solid red";
        titleError.textContent = "Title is required!";
        title.focus();
        }
        if(body.value == '')
    	{        
    	event.preventDefault();
     	body.style.border = "1px solid red";
        bodyError.textContent = "Body is required!";
        body.focus();
        }
        
    })

    clear.addEventListener('click', check(event));
    function check(event)
    {    
         var response = window.confirm("Are you sure you want to clear all of the post? All unsaved changes will be lost.");
         if(response)
         {
             return true;
         }
         else
         {
            event.preventDefault();
            return false;
         }        

    };

    // function check() 
    // {
    //     window.alert("I was called too");
    //       if(confirm("Are you sure you want to clear all of the post? All unsaved changes will be lost."))
    //       {
    //         document.getElementById("myForm").reset();
    //       }
    //       else
    //       {   
    //           document.getElementById('title').innerHTML(title.value);
    //           document.getElementById('body').innerHTML(body.value);         
    //       }
    // };