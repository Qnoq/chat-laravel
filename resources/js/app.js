const { default: axios } = require('axios');

require('./bootstrap');

const nickname = document.getElementById('nickname');
const message = document.getElementById('message');
const submitButton = document.getElementById('submitButton');
const chatDiv = document.getElementById('chat');
const btnNickname = document.getElementById('btnNickname');
const divChat = document.getElementById('divChat');
const nicknameChoose = document.getElementById('nicknameChoose');

submitButton.addEventListener('click', () => {
    axios.post('/chat', {
        nickname: nickname.value,
        message: message.value
    });
});

message.addEventListener("keyup", function(e) {
        if (e.keyCode === 13) {
            submitButton.click()
            message.value = "";
        }
    });

nickname.addEventListener("keyup", function(e) {
    if (e.keyCode === 13) {
        e.preventDefault();
        btnNickname.click()
    }
});

btnNickname.addEventListener('click', () => {
    divChat.classList.remove("invisible");
    nicknameChoose.classList.add("invisible");
});

window.Echo.channel('chat')
    .listen('.chat-message', (event) => {
        if(nickname.value == event.nickname){
            chatDiv.classList.add("anotherclass");
            chatDiv.innerHTML += `<div
            class="w-max ml-auto break-all mt-2 mb-1 p-2 rounded-br-none bg-blue-500 rounded-2xl text-white text-left mr-5"
            >
                ${event.message} par <em>Vous</em>
            </div>`
        }
      else {
            chatDiv.classList.add("justify-end");
            chatDiv.innerHTML += `<div
                class="other break-all mt-2  ml-5 rounded-bl-none float-none bg-gray-300 mr-auto rounded-2xl p-2"
            >
                ${event.message} par <em>${event.nickname}</em>
            </div>`
            }
    });
