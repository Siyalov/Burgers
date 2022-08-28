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
})

form.addEventListener('submit', async function(evt)  {

   evt.preventDefault()   

   // const formData = new FormData()
   // formData.append('name', document.querySelector('#name').value)
   // formData.append('phone', document.querySelector('#phone').value)

console.log(new FormData(evt.target))

   await fetch('/server.php', {
      method: 'POST',
      body: new FormData(form)
    }).then(value => {
      return value.json()
    }).then(value => { 
      alert(`Заказ принят на имя: ${value.name}`)
    }); 



   // let result = await response.json();

   //    console.log(result.res)
   //    alert("Успешно отправлено!!!")
   //    if(result.res == 'falid'){
         
   //       document.querySelector('modal_content h2');
   //       h2.textContant = 'Попробуйте еще раз'
   // }
})



