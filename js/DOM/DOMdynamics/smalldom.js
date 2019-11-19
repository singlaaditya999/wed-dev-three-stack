// Fig. 12.5: dom.js 
// Script to demonstrate basic DOM functionality. 
var currentNode; // stores the currently highlighted node
var idcount = 0; // used to assign a unique id to new elements

// register event handlers and initialize currentNode
function start()
{
   document.getElementById( "insertButton" ).addEventListener(
      "click", insert, false );
   document.getElementById( "appendButton" ).addEventListener(
      "click", appendNode, false );
   
   // initialize currentNode
   currentNode = document.getElementById( "bigheading" );
} // end function start

// call start after the window loads
window.addEventListener( "load", start, false );

// insert a paragraph element before the current element
// using the insertBefore method
function insert()
{
   var newNode = createNewNode(
      document.getElementById( "ins" ).value );
   currentNode.parentNode.insertBefore( newNode, currentNode );
   switchTo( newNode );
} // end function insert

// append a paragraph node as the child of the current node
function appendNode()
{
   var newNode = createNewNode(
      document.getElementById( "append" ).value );
   currentNode.appendChild( newNode );
   switchTo( newNode );
} // end function appendNode

// helper function that returns a new paragraph node containing
// a unique id and the given text
function createNewNode( text )
{
   var newNode = document.createElement( "p" );
   nodeId = "new" + idcount;
   ++idcount;
   newNode.setAttribute( "id", nodeId ); // set newNode's id
   text = "[" + nodeId + "] " + text;
   newNode.appendChild( document.createTextNode( text ) );
      
return newNode;
} // end function createNewNode

// helper function that switches to a new currentNode
function switchTo( newNode )
{
   currentNode.setAttribute( "class", "" ); // remove old highlighting
   currentNode = newNode;
   currentNode.setAttribute( "class", "highlighted" ); // highlight
   
} // end function switchTo

/*************************************************************************
* (C) Copyright 1992-2012 by Deitel & Associates, Inc. and               *
* Pearson Education, Inc. All Rights Reserved.                           *
*                                                                        *
* DISCLAIMER: The authors and publisher of this book have used their     *
* best efforts in preparing the book. These efforts include the          *
* development, research, and testing of the theories and programs        *
* to determine their effectiveness. The authors and publisher make       *
* no warranty of any kind, expressed or implied, with regard to these    *
* programs or to the documentation contained in these books. The authors *
* and publisher shall not be liable in any event for incidental or       *
* consequential damages in connection with, or arising out of, the       *
* furnishing, performance, or use of these programs.                     *
*************************************************************************/