         var output; // stores the string to display
         var x = 1; // global variable
         output = "<p class='space'>global variable x is " + x +
               " on Load";

         function start()
         {
            var x = 5; // variable local to function start

            output += "<p>local x in start is " + x + "</p>";

            functionA(); // functionA has local x
            functionB(); // functionB uses global variable x
            functionA(); // functionA reinitializes local x
            functionB(); // global variable x retains its value

            output += "<p class='space'>local x in start is " + x + 
               "</p>";
            document.getElementById( "results" ).innerHTML = output;
         } // end function start

         function functionA()
         {
            var x = 25; // initialized each time functionA is called

            output += "<p class='space'>local x in functionA is " + x +
               " after entering functionA</p>";
            ++x;
            output += "<p>local x in functionA is " + x +
               " before exiting functionA</p>";
         } // end functionA

         function functionB()
         {
            output += "<p class='space'>global variable x is " + x +
               " on entering functionB";
            x *= 10;
            output += "<p>global variable x is " + x + 
               " on exiting functionB</p>";
         } // end functionB
              
         window.addEventListener( "load", start, false );