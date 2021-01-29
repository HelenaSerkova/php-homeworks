"use strict";
let form = document.querySelector('form');
// function responseHandler(serverAnswer) {
// // let arr = [];
// // arr.push("serverAnswer");
// console.log(serverAnswer);



//   let text = document.getElementById('text');
// let div = document.createElement("div");
// let text = document.getElementById('text');
// div.innerHTML = `<p>${serverAnswer}</p>`;
// text.append(div);
// window.Location.replace('accound.php')
  // console.log(serverAnswer);
  // console.log($serverAnswer['password']);

  //   if (trim($post['login']) === 'qwerty' && trim($post['password']) === '123'){
  //     $_SESSION['login'] = $post['login'];
  //     header('Location: account.php'); // если успешно залогинился, то переход на страницу account.php
  // // отправка ответа с js
  //   } else {
  //     $error = 'Ошибка авторизации'; // отправка ответа в js
  //   }
  // }

// }


form.addEventListener('submit', async ()=> {
  event.preventDefault();
  const response = await fetch ('handler.php',
    {
      method: 'POST',
      body: new FormData(form)
    });
    const answer =  await response.text(); // .json() / .blob / .formdata()
    console.log(answer);
});
