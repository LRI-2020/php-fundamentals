
<?php
/**
 * Series of exercises on PHP conditional structures.
*/  


// 1.1 Clean your room Exercise
  
// $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"]; 
  
// $room_state = $possible_states[4];

// checkState($room_state);

// function checkState($room_state){


//       switch($room_state)
//       {
//           case "health hazard":
//                 cleanup_room(3);   
//                 break; 
//           case "filthy":
//                 cleanup_room(2);  
//                 break;  
//           case "dirty":
//                 cleanup_room(1);
//                 break;
//           case "clean":
//           case "immaculate":
//               nothing_to_do(); 
//               break;     
      
//       }
//   }
  
//   function nothing_to_do()
//   {
//   echo "<br>Nothing to do, room is neat.";
//   }
  
  
//   function cleanup_room($level)
//   {
//     switch($level)
//     {
//         case 1 :
//               echo "<br>refreshing room ...";
//               break;
//         case 2:
//           echo "<br>cleaning room ...";
//           break;
//           case 3:
//             echo "<br>burning the room ...";
//             break;
//     }
  
//      echo "<br>room cleaned!";
  
//   }

  
// 2. "Different greetings according to time" Exercise

// $currentHour = date('Hi');
// $currentDate = date('d/m/y H:i:s');
// echo $currentDate;
// echo $currentHour;

// if($currentHour>=500 and $currentHour<901){
//       echo "Good Morning!";
// }

// else if($currentHour>=901 and $currentHour<1201){
//       echo "Good Day";

// }

//       else if($currentHour>=1201 and $currentHour<1601){
//             echo "Good afternoon !";

//       }

      
//       else if($currentHour>=1601 and $currentHour<2100){
//             echo "Good evening !";

//       }

//       else{
//             echo "Good night !";
//       }

// 3. /4/5 "Different greetings according to age" Exercise


// function greeting($hello,$gender,$age){
//         echo "$hello $gender $age!";
 
//   }

// function setAge($age){
// $status="unknown";

//     if($age <12){
//       $status="kid";
//     }

//     else if($age >=12 and $age <18){
//       $status="teen";

//     }

//     else if($age >=18 and $age <115){
//       $status="adult";

//     }

//     else{
//       $status="zombie";
//     }

//     return $status;
// }

// function setGender($gender){

//       $res="people";
//       switch ($gender){

//             case "F":
//                   $res="Miss";
//                   break;
//             case "M":
//                   $res="Mister";
//                   break;
                  
//       }

//       return $res;
// }

// function setGreeting($language){

//       return $language == "EN"? "Hello":"Alloha";

// }

// if(isset($_GET['age']) and isset($_GET['gender']) and isset($_GET['language'])){

//       $age = setAge($_GET['age']);
//       $gender = setGender($_GET['gender']);
//       $language = setGreeting($_GET['language']);


//       greeting($language,$gender,$age);
//  }
// // Form (incomplete)
// <form method="get" action="conditions.php">

// 	<label for="age">Age : </label>
// 	<input type="number" name="age">

//       <label for="F">F</label>
// 	<input type="radio" id="F" name="gender" value="F">

//       <label for="M">M</label>
//       <input type="radio" id="M" name="gender" value="M">

      
//       <label for="F">EN</label>
// 	<input type="radio" id="EN" name="language" value="EN">

//       <label for="OT">Other</label>
//       <input type="radio" id="OT" name="language" value="OT">

// 	<input type="submit" name="submit" value="Greet me now">
// </form>

// 6:7. soccer team

// function displayChoice($age){

//       $message = "Sorry you don't fit the criteria";
//       if($age>=21 and $age<=40){
//             $message= "Welcome to the team";
//       }
      
//       return $message;
// }
 
// if(isset($_GET['age'])){

//     echo displayChoice($_GET['age']);

//  }
// //HTML
// <form method="get" action="conditions.php">

// 	<label for="age">Age : </label>
// 	<input type="number" name="age">

// 	<input type="submit" name="submit" value="Greet me now">
// </form>

//Exercice 8

// function displayGrade($grade){
//       $res="no grade received";

//       switch($grade){
//             case ($grade<4):
//                   $res="This work is really bad. What a dumb kid! ";
//                   break;
//             case ($grade>=4 and $grade <10):
//                    $res="This is not sufficient. More studying is required.";
//                    break;
//             case ($grade==10):
//                   $res="barely enough!";
//                   break;
//             case($grade>10 and $grade<15):
//                   $res="Not bad!";
//                   break;
//             case($grade>=15 and $grade<19):
//                   $res="Bravo, bravissimo!";
//                   break;
//             case($grade>=19):
//                   $res="Too good to be true : confront the cheater!";
//                   break;  
//       }

//       return $res;
// }

// if(isset($_GET['grade'])){

//     echo displayGrade($_GET['grade']);

//  }

 
// <form method="get" action="conditions.php">

// <label for="grade">Grade : </label>
// <input type="number" id ="grade" name="grade">
// <input type="submit" name="submit" value="Grade Student">
// </form>

?>

<form method="get" action="conditions.php">

	<label for="grade">Grade : </label>
	<input type="number" id ="grade" name="grade">
	<input type="submit" name="submit" value="Grade Student">
</form>

