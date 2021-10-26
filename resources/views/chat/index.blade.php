<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div id="nicknameChoose" class="mt-10 flex justify-center">
  <div class="max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Pseudo">
        Pseudo
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nickname" type="text" placeholder="Choisissez votre pseudo ..">
    </div>
    <div class="flex items-center justify-between">
      <button id="btnNickname" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Entrer
      </button>
    </div>
  </form>
</div>
</div>

    <!-- component -->
<!-- This is an example component -->
<div id="divChat" class="invisible mt-5 container mx-auto shadow-lg rounded-lg">
    <!-- headaer -->
<div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
  <div class="font-semibold text-2xl">Chat</div>
</div>
<!-- end header -->
<!-- Chatting -->
<div class="bg-white">
  <!-- chat list -->
  <div class="">
    <!-- end search compt -->
  <!-- end chat list -->
  <!-- message -->
  <div class="w-full px-5 flex flex-col justify-between">
    <div class="flex flex-col mt-5">
      <div id="chat" class="flex flex-col mt-2 justify-end mb-4">
        
      </div>
    </div>
    <div class="py-5">
            <input
              type="text"
              id="message"
              class="rounded-2xl bg-gray-100 py-3 px-5"
              placeholder="Votre message ..."
            />
      <button
      id="submitButton"
      class=""
      >
        <svg
          class="w-5 h-5 transform rotate-90 -mr-px"
          fill=""
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"
          ></path>
        </svg>
      </button>
    </div>
  </div>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>