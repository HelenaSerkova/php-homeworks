"use strict";
let form = document.querySelector('form');
function responseHandler(serverAnswer) {
  let div = document.createElement("div");
  let text = document.getElementById('text');
  div.innerHTML = '<p>${serverAnswer}</p>';
  text.append(div);

}


form.addEventListener('submit', async (event)=> {
  event.preventDefault();
  const response = await fetch ('handler.php',
    {
      method: 'POST',
      body: new FormData(form)
    });
    const answer =  await response.text(); // .json() / .blob / .formdata()
    responseHandler(answer);
});
