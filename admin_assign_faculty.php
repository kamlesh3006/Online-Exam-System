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

<body>
  
<nav class="fixed top-0 z-50 w-full bg-violet-900">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        
        <a href="#" class="flex ml-2 md:mr-24" >
          <span class="self-center text-xl font-semibold sm:text-3xl whitespace-nowrap text-white" style="font-weight: bolder;">Online Exam System</span>
        </a>
      </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 bg-gray-900" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto sidebar">
      <ul class="space-y-2 font-medium">
         <li class="hover:bg-gray-800 rounded-lg">
            <a href="/examm/admin.php" class="flex items-center p-2 text-white rounded-lg py-2">
               <svg aria-hidden="true" class="w-6 h-6 text-white transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="/examm/admin_class_management.php" class="flex items-center p-1 text-white rounded-lg">
            <i class="bi bi-bookmark-fill text-white px-1"></i>
               <span class="flex-1 ml-3 whitespace-nowrap">Classes</span>
            </a>
         </li>
         <li class="rounded-lg py-2 hover:bg-gray-800">
         <a href="#" class="flex items-center p-1 text-white rounded hover:text-white">
         <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-book-fill text-white px-1 hover:text-gray-900" viewBox="0 0 16 16">
            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Subjects</span>
              <i class="bi bi-chevron-down"></i>
               <ul class="dropdown">
                <li class="hover:bg-gray-700">
                
                <a href="/examm/admin_subject.php" class="flex-1 ml-1 whitespace-nowrap px-8 text-white">Add Subject</a>
                </li>
                <li class="py-3 hover:bg-gray-700">
                
                <a href="/examm/admin_assign_subject.php" class="flex-1 ml-1 whitespace-nowrap px-8 text-white">Assign Subject</a>
                </li>
                </ul>
              </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="#" class="flex items-center p-1 text-white rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill-check text-white" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Faculty</span>
               
              <i class="bi bi-chevron-down"></i>
               <ul class="dropdown">
                <li class="hover:bg-gray-700">
                <a href="/examm/admin_faculty_management.php" class="flex-1 ml-3 whitespace-nowrap px-8 text-white">Add Faculty</a>
                </li>
                <li class="py-3 hover:bg-gray-700">
                <a href="/examm/admin_assign_faculty.php" class="flex-1 ml-3 whitespace-nowrap px-8 text-white">Assign Faculty</a>
                </li>
                </ul>
              </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="#" class="flex items-center p-1 text-white rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-lines-fill text-white mx-1" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Student</span>
               
              <i class="bi bi-chevron-down"></i>
               <ul class="dropdown">
                <li class="hover:bg-gray-700">
                <a href="/examm/admin_student.php" class="flex-1 ml-3 whitespace-nowrap px-8 text-white">Add Student</a>
                </li>
                <li class="py-3 hover:bg-gray-700">
                <a href="/examm/admin_assign_student.php" class="flex-1 ml-3 whitespace-nowrap px-8 text-white">Assign Student</a>
                </li>
                </ul>
              </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="/examm/admin_exam.php" class="flex items-center p-1 text-white rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill text-white mx-1" viewBox="0 0 16 16">
            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Exam</span>
            </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="#" class="flex items-center p-1 text-white rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill text-white mx-1" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Result</span>
               
              <i class="bi bi-chevron-down"></i>
               <ul class="dropdown">
                <li class="hover:bg-gray-700 text-white">
                <a href="#" class="flex-1 ml-3 whitespace-nowrap px-8">Analyze Result</a>
                </li>
                <li class="py-3 hover:bg-gray-700 text-white">
                <a href="#" class="flex-1 ml-3 whitespace-nowrap px-8">Publish Result</a>
                </li>
                </ul>
              </a>
         </li>
         <li class="hover:bg-gray-800 py-2 rounded-lg">
            <a href="index1.php" class="flex items-center p-1 text-white rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right text-white mx-1" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
            </a>
         </li>
      </ul>
   </div>
</aside>

<div class="p-4 sm:ml-64">
         <h1 style="margin-top: 10vh; font-size: xx-large; font-weight: bold;">Assign Faculty Management</h1>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="margin-top: 1vh;">
    
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-sm text-gray-900 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-5 text-left">
                        Faculty List with Class Name
                    </th>
                    <th scope="col" class="px-6 py-5 pop" onclick="openPopup()" style="float: right">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg></a>
                    </th>
                </tr>
            </thead>
        </table>
        <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
            <tr>
                <th scope="col" class="px-6 py-3 text-center">
                    Roll No
                <th scope="col" class="px-6 py-3 text-center">
                    Faculty Name
                <th scope="col" class="px-6 py-3 text-center">
                    Class Name
                <th scope="col" class="px-6 py-3 text-center">
                    Created On
                </th>
                
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-50 border-b ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                    1
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                    comp001
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                    SE Computer
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap text-center">
                    06/05/2023
                </th>
               
                <td class="px-6 py-4 text-center">
                    <a href="#" class="font-medium text-blue-600 ">Edit</a>
                </td>
            </tr>
            
        </tbody>
    </table>
    <p class="py-2 px-3 text-gray-400 bg-gray-50" style="font-size:x-small">Showing 1 of 1 Entries</p>
</div>

      <div id="popup" class="popup">
  <div class="popup-content" style="width: 50vh;">
    <label for="input" style="font-weight: bold;">Enter Faculty :</label><br>
    <input type="text" class="my-3 py-1 px-1 bg-gray-200 border-b border-gray-500" style="border-radius : 4px; width:45vh" id="input" placeholder="Enter student name"><br>
    <input type="text" class="my-3 py-1 px-1 bg-gray-200 border-b border-gray-500" style="border-radius : 4px; width:45vh" id="input" placeholder="Enter KBT_UG_ID"><br>
    <input type="text" class="my-3 py-1 px-1 bg-gray-200 border-b border-gray-500" style="border-radius : 4px; width:45vh" id="input"placeholder="Enter Password"><br>
    <input type="text" class="my-3 py-1 px-1 bg-gray-200 border-b border-gray-500" style="border-radius : 4px; width:45vh" id="input"placeholder="Enter Gender"><br>
    <input type="text" class="my-3 py-1 px-1 bg-gray-200 border-b border-gray-500" style="border-radius : 4px; width:45vh" id="input"placeholder="Enter password"><br>
    
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 mr-1.5 mb-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" style="float:right" onclick="saveInput()">Assign Faculty</button>
  </div>
</div>


   </div>
</div>
<script>
        const listItems = document.querySelectorAll('li');
      
        listItems.forEach(function(listItem) {
          const dropdown = listItem.querySelector('.dropdown');
      
          listItem.addEventListener('click', function() {
            dropdown.classList.toggle('show');
          });
        });

</script>
<style>
        .dropdown {
          display: none;
        }
        
        .show {
          display: block;
        }
      </style>

<script>
  function openPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
    document.body.classList.add("");
  }

  function saveInput() {
    var input = document.getElementById("input").value;
    alert(input + " assigned to class.");
    closePopup();
  }

  function closePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
    document.body.classList.remove("blur");
  }
</script>
<style>
  .popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
    display: none;
  }
  
  .popup-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    padding: 20px;
  }
  
  .blur {
    filter: blur(5px);
    -webkit-filter: blur(5px);
  }
</style>

</body>

</html>