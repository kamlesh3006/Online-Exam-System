<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sidebar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- <script src="./tailwind3.js"></script> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body class="bg-gray-100  font-[Poppins]">
  
  <div class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] duration-1000
    p-2 w-[300px] overflow-y-auto text-center bg-gray-900 shadow h-screen">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center rounded-md ">
        <h1 class="text-[25=4px]  ml-4 text-gray-200 font-bold">Online Examination System</h1>
      </div>
      <hr class="my-2 text-gray-600">
      <h1 class="text-[20px] ml-4 text-gray-200">Admin</h1>
      <hr class="my-2 text-gray-600">
      <div>
        

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-bar-chart-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Dashboard</span>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-bookmark-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200">Classes</span>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg>
          <div class="flex justify-between w-full items-center" onclick="dropDown()">
            <span class="text-[15px] ml-4 text-gray-200">Subjects</span>
            <span class="text-sm rotate-180" id="arrow">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Add Subject</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Assign Subject</h1>
        </div>
        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
          </svg>
          <div class="flex justify-between w-full items-center" onclick="dropDown1()">
            <span class="text-[15px] ml-4 text-gray-200">Faculty</span>
            <span class="text-sm rotate-180" id="arrow1">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu1">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Add Faculty</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Assign Faculty</h1>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg>
          <div class="flex justify-between w-full items-center" onclick="dropDown2()">
            <span class="text-[15px] ml-4 text-gray-200">Student</span>
            <span class="text-sm rotate-180" id="arrow2">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu2">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Add Student</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Assign Student</h1>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg>
          <div class="flex justify-between w-full items-center" onclick="dropDown3()">
            <span class="text-[15px] ml-4 text-gray-200">Exam</span>
            <span class="text-sm rotate-180" id="arrow3">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu3">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Add Exam</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Assign Exam</h1>
        </div>

        <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
          <div class="flex justify-between w-full items-center" onclick="dropDown4()">
            <span class="text-[15px] ml-4 text-gray-200">Result</span>
            <span class="text-sm rotate-180" id="arrow4">
              <i class="bi bi-chevron-down"></i>
            </span>
          </div>
        </div>
        <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu4">
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Analyze Result</h1>
          <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Publish Result</h1>
        </div>

        <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
          <i class="bi bi-box-arrow-in-right"></i>
          <span class="text-[15px] ml-4 text-gray-200">Logout</span>
        </div>

      </div>
    </div>
  </div>
  <div
  class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-300">
  <div class="flex flex-col" style="margin-left:300px">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table
          class="min-w-full border text-center text-sm font-light dark:border-neutral-500">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th
                scope="col"
                class="border-r px-6 py-4 dark:border-neutral-500">
                #
              </th>
              <th
                scope="col"
                class="border-r px-6 py-4 dark:border-neutral-500">
                First
              </th>
              <th
                scope="col"
                class="border-r px-6 py-4 dark:border-neutral-500">
                Last
              </th>
              <th scope="col" class="px-6 py-4">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td
                class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                1
              </td>
              <td
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                Mark
              </td>
              <td
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                Otto
              </td>
              <td class="whitespace-nowrap px-6 py-4">@mdo</td>
            </tr>
            <tr class="border-b dark:border-neutral-500">
              <td
                class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                2
              </td>
              <td
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                Jacob
              </td>
              <td
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                Thornton
              </td>
              <td class="whitespace-nowrap px-6 py-4">@fat</td>
            </tr>
            <tr class="border-b dark:border-neutral-500">
              <td
                class="whitespace-nowrap border-r px-6 py-4 font-medium dark:border-neutral-500">
                3
              </td>
              <td
                colspan="2"
                class="whitespace-nowrap border-r px-6 py-4 dark:border-neutral-500">
                Larry the Bird
              </td>
              <td class="whitespace-nowrap px-6 py-4">@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
  
  <script>
    function dropDown() {
      document.querySelector('#submenu').classList.toggle('hidden')
      document.querySelector('#arrow').classList.toggle('rotate-0')
    }
    dropDown()

    function dropDown1() {
      document.querySelector('#submenu1').classList.toggle('hidden')
      document.querySelector('#arrow1').classList.toggle('rotate-0')
    }
    dropDown1()

    function dropDown2() {
      document.querySelector('#submenu2').classList.toggle('hidden')
      document.querySelector('#arrow2').classList.toggle('rotate-0')
    }
    dropDown2()

    function dropDown3() {
      document.querySelector('#submenu3').classList.toggle('hidden')
      document.querySelector('#arrow3').classList.toggle('rotate-0')
    }
    dropDown3()

    function dropDown4() {
      document.querySelector('#submenu4').classList.toggle('hidden')
      document.querySelector('#arrow4').classList.toggle('rotate-0')
    }
    dropDown4()
  </script>
</body>

</html>