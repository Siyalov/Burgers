const btns = document.querySelectorAll(".btn"); 
const modal = document.getElementById('modal');
const close = document.getElementById('close_btn');
const form = document.querySelector("form"); 

btns.forEach( btn => {
   btn.addEventListener('click', function() {
      modal.classList.add('modal_opened')        
   })
})

close.addEventListener('click', function() {
   modal.classList.remove('modal_opened')
   form.classList.remove("hidden") 
   document.querySelector('.success_content').classList.add("hidden") 
   document.querySelector(".modal_content").classList.remove("hidden")
})

form.addEventListener('submit', async function(evt)  {

   evt.preventDefault()   

  
console.log(new FormData(evt.target))

   await fetch('/server.php', {
      method: 'POST',
      body: new FormData(form)
    }).then(value => {
      return value.json()
    }).then(value => { 
      
      form.classList.add("hidden")
      document.querySelector('.success_content').classList.remove("hidden") 
      document.querySelector(".modal_content").classList.add("hidden")
      document.getElementById("success_description").innerText = ` ${value.name}, с вами свяжутся в течение 9 минут.`  
      
   }); 

})



