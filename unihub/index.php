<?php 
	session_start();

	include("nav.php");
    
    
?>


<html>
<head>
	<title> Welcome to UniHub </title>
</head>

<body>
    
    
        <fieldset style="border: 2px solid orange;">
            <table width="100%">
                <tr>
                    <td colspan="3"><h2>An interesting feature of competitive programming</h2></td>
                    
                </tr>
                <tr>
                    <td colspan="3"> There are O(∞) different things that have mentioned in some problem statement on Codeforces and not only it. This is the top of the most interesting and common ones. Place distribution based on my observations.<br><br>Thanks to problemsetters for creating so various and interesting world of competitive programming problems! </td>
                </tr>
                <tr>
                    <td colspan="3"><hr color="green" size="4"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><img src="users/admin/admin.jpg" width="30" height="30"> posted by <a href="#" > admin</a></td>
                    <td><div align="right"><img src="img/comments.svg"> 29 comments</div></td>
                </tr>
                
            </table>
        </fieldset> <br><br>
        
        <fieldset style="border: 2px solid orange;">
                <table width="100%">
                    <tr>
                        <td colspan="3"><h2>Linear Search Tutorial</h2></td>

                    </tr>
                    <tr>
                        <td colspan="3"> 
                            Linear search is used on a collections of items. It relies on the technique of traversing a list from start to end by exploring properties of all the elements that are found on the way.<br><br>

                            For example, consider an array of integers of size . You should find and print the position of all the elements with value . Here, the linear search is based on the idea of matching each element from the beginning of the list to the end of the list with the integer , and then printing the position of the element if the condition is `True'.<br><br>

                            <b><i>Implementation:</i></b><br>

                            The pseudo code for this example is as follows :<br>
                            <pre>
                            for(start to end of array)
                            {
                                if (current_element equals to 5)  
                                {
                                    print (current_index);
                                }
                            }
                            </pre>
                            For example, consider the following image:<br>
                            <img src="img/array.png"><br>

                            If you want to determine the positions of the occurrence of the number 7 in this array. To determine the positions, every element in the array from start to end, i.e., from index 1  to index 10 will be compared with number 7, to check which element matches the number .

                            Time Complexity:

                            The time complexity of the linear search is O(N)  because each element in an array is compared only once.
                        
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><hr color="green" size="4"></td>

                    </tr>
                    <tr>
                        <td colspan="2"><img src="users/student/student.jpg" width="30" height="30"> posted by <a href="#" > student</a></td>
                        <td><div align="right"><img src="img/comments.svg"> 99 comments</div></td>
                    </tr>

                </table>
        </fieldset> <br><br>
    
        <fieldset style="border: 2px solid orange;">
            <table width="100%">
                <tr>
                    <td colspan="3"><h2>[Tutorial] Bubbole Sort</h2></td>
                    
                </tr>
                <tr>
                    <td colspan="3"> 
                    Sorting Algorithms are concepts that every competitive programmer must know. Sorting algorithms can be used for collections of numbers, strings, characters, or a structure of any of these types.<br>

                    Bubble sort is based on the idea of repeatedly comparing pairs of adjacent elements and then swapping their positions if they exist in the wrong order.

                    Assume that A[] is an unsorted array of n elements. This array needs to be sorted in ascending order. The pseudo code is as follows:<br><br>
                        
                    <pre>
                    void bubble_sort( int A[ ], int n ) {
                        int temp;
                        for(int k = 0; k< n-1; k++) {
                            // (n-k-1) is for ignoring comparisons of elements which have already been compared in earlier iterations

                            for(int i = 0; i < n-k-1; i++) {
                                if(A[ i ] > A[ i+1] ) {
                                    // here swapping of positions is being done.
                                    temp = A[ i ];
                                    A[ i ] = A[ i+1 ];
                                    A[ i + 1] = temp;
                                }
                            }
                        }
                    }
                    </pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><hr color="green" size="4"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><img src="users/Asif/Asif.jpg" width="30" height="30"> posted by <a href="#" > Asif</a></td>
                    <td><div align="right"><img src="img/comments.svg"> 61 comments</div></td>
                </tr>
                
            </table>
        </fieldset> <br><br>
        
        <fieldset style="border: 2px solid orange;">
            <table width="100%">
                <tr>
                    <td colspan="3"><h2>Post Title</h2></td>
                    
                </tr>
                <tr>
                    <td colspan="3"> Post Text </td>
                </tr>
                <tr>
                    <td colspan="3"><hr color="green" size="4"></td>
                    
                </tr>
                <tr>
                    <td colspan="2"><img src="users/dummy/dummy.jpg" width="30" height="30"> posted by <a href="#" > UserName</a></td>
                    <td><div align="right"><img src="img/comments.svg"> 69 comments</div></td>
                </tr>
                
            </table>
        </fieldset> <br><br>

</body>

</html>